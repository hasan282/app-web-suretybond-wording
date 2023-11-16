<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php
$modelNumber = new \App\Models\JaminanNumber(array(
    'cabang' => $jaminan['cabang_id'],
    'jenis' => $jaminan['jenis_id'],
    'proyek' => $jaminan['proyek_id'],
    'issued' => $jaminan['issued_date']
));
$modelNumber->isConditional(
    $jaminan['conditional'] === null ? null : intval($jaminan['conditional']) === 1
)->isKonstruksi(
    $jaminan['pekerjaan_id'] === null ? null : intval($jaminan['pekerjaan_id']) === 110
);
$className = $modelNumber->getClassName();
if (!file_exists(APPPATH . 'Libraries/Wordings/' . $className . '.php')) $className = null;
// $className = 'BUMIDA_PB4_NKUC';
$pageSettings = array(
    'paper' => 'A4',
    'page_top' => '50',
    'page_left' => '25',
    'page_right' => '25',
    'page_bottom' => '5',
    'spacing' => '100',
    'sign_margin' => '30',
    'sign_width' => '65',
    'sign_height' => '25',
    'sign_space' => '10'
);
$dataProfile = $profile ?? null;
$profileVal = null;
if ($dataProfile !== null) {
    $profileVal = $dataProfile['enkrip'];
    $pageSettings = $dataProfile;
    unset($pageSettings['enkrip']);
}
if ($className !== null) {
    $export = new ('\App\Libraries\Wordings\\' . $className)($jaminan);
    $export->setting($pageSettings);
    if ($bg_blanko) $export->setBlanko(base_url('image/content/blanko/' . $jaminan['asuransi_nick'] . '.jpg'));
}
?>
<div class="card">
    <div class="card-body">

        <?= $this->include('guarantee/print/header'); ?>

    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Pengaturan Halaman</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">

        <?= $this->include('guarantee/print/setting'); ?>

    </div>
</div>
<?php if ($className !== null) : ?>
    <script>
        const PDFCONTENT = <?= json_encode($export->content()->getPDF()); ?>;
        const PDFFONTS = <?= json_encode($export->getFont()); ?>;
    </script>
<?php endif; ?>
<div class="card">
    <div class="card-body">
        <?php if ($className === null) : ?>
            <div class="d-flex" style="min-height:100px;height:20vh">
                <div class="w-100 my-auto text-center text-danger">
                    <i class="fas fa-exclamation-triangle fa-2x mb-3"></i>
                    <h5 class="text-bold">Draft Wording Tidak Ditemukan</h5>
                </div>
            </div>
        <?php else : ?>
            <?= $this->include('guarantee/print/printexport'); ?>
        <?php endif; ?>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>

<script>
    const SETTINGS = <?= json_encode($pageSettings); ?>;
    if (typeof PDFFONTS !== 'undefined') pdfMake.fonts = PDFFONTS;
    $(function() {
        $.each(SETTINGS, function(id, val) {
            $('#' + id).val(val);
        });
        $('#buttonpdf').click(function() {
            if (typeof PDFCONTENT !== 'undefined') pdfMake.createPdf(PDFCONTENT).open();
        });
        <?php if ($profileVal !== null) : ?>
            $('#profile').val('<?= $profileVal; ?>');
            $('#enkriprofile').val('<?= $profileVal; ?>');
            $('#editprofile').fadeIn();
        <?php endif; ?>
        $('#buttonused').click(function() {
            Swal.fire({
                title: 'Konfirmasi Cetak Blanko',
                text: 'Apakah Jaminan sudah dicetak menggunakan Blanko dengan nomor <?= $jaminan['prefix_print'] . $jaminan['blanko_print']; ?> ?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                confirmButtonText: '<i class="fas fa-check-circle mr-2"></i>Sudah dicetak',
                cancelButtonText: '<i class="fas fa-times mr-2"></i> Tidak',
                showCloseButton: true
            }).then((result) => {
                if (result.isConfirmed) {
                    disablebuttons();
                    $('#printforms').attr('action', '/blanko/used').trigger('submit');
                }
            });
        });
        $('#buttoncrash').click(function() {
            Swal.fire({
                title: 'Laporkan Blanko Rusak',
                text: 'Ubah status Blanko <?= $jaminan['prefix_print'] . $jaminan['blanko_print']; ?> menjadi rusak dan cetak Jaminan dengan nomor Blanko lainnya ?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#DC3545',
                confirmButtonText: '<i class="fas fa-exclamation-circle mr-2"></i>Laporkan rusak',
                cancelButtonText: '<i class="fas fa-times mr-2"></i> Tidak',
                showCloseButton: true,
                focusCancel: true
            }).then((result) => {
                if (result.isConfirmed) {
                    disablebuttons();
                    $('#printforms').attr('action', '/blanko/crash').trigger('submit');
                }
            });
        });
    });

    function disablebuttons() {
        $('#buttonused').attr('disabled', true);
        $('#buttoncrash').attr('disabled', true);
    }
</script>

<?= $this->endSection(); ?>