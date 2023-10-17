<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php
$className = 'WORDING_APB_PM';
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
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-7">
                <?php if (intval($jaminan['issued']) === 1) : ?>
                    <div class="border-fade px-3 pt-2 text-center">
                        <p class="mb-1 text-info">Pastikan cetak Jaminan dengan nomor Blanko :</p>
                        <h3 class="mb-2"><span class="text-secondary"><?= $jaminan['prefix_print']; ?></span><strong><?= $jaminan['blanko_print']; ?></strong></h3>
                        <div class="text-center my-3 pt-4">
                            <button class="btn btn-primary btn-sm mx-1" id="buttonused"><i class="fas fa-check-circle mr-2"></i>Konfirmasi Cetak</button>
                            <button class="btn btn-danger btn-sm mx-1" id="buttoncrash"><i class="fas fa-exclamation-triangle mr-2"></i>Lapor Blanko Rusak</button>
                        </div>
                    </div>
                    <form id="printforms" method="POST">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="jaminan" value="<?= $params; ?>">
                    </form>
                <?php endif; ?>
            </div>
            <div class="col-5">
                <div class="mx-auto mw-3 text-center pb-4">
                    <small class="text-secondary">Print dokumen dengan</small>
                    <button type="button" id="buttonpdf" class="btn btn-danger btn-lg btn-block">
                        Jadikan <strong>PDF</strong>
                    </button>
                    <small class="text-secondary">atau</small>
                    <button type="button" class="btn btn-primary btn-block" disabled>
                        Download File <strong>Word</strong>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?php
// $availableClass = file_exists(APPPATH . 'Libraries/Wordings/WORDONG.php');
// $className = '\App\Libraries\PDFExport\MAXIMUS_' . $jaminan['jenis_singkat'] . '_' . $jaminan['proyek_id'];
$export = new ('\App\Libraries\Wordings\\' . $className)($jaminan);
$export->setting($pageSettings);
if ((get_cookie('BGBLNK') ?? '0') == '1') $export->setBlanko(base_url('image/content/blanko/' . $jaminan['asuransi_nick'] . '.jpg'));
?>

<?= $this->section('jscript'); ?>

<script>
    const SETTINGS = <?= json_encode($pageSettings); ?>;
    pdfMake.fonts = <?= json_encode($export->getFont()); ?>;
    $(function() {
        $.each(SETTINGS, function(id, val) {
            $('#' + id).val(val);
        });
        $('#buttonpdf').click(function() {
            pdfMake.createPdf(<?= json_encode($export->content()->getPDF()); ?>).open();
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