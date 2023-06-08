<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php
$cookieBack = get_cookie('BGBLNK') ?? '0';
$backBlanko = (intval($cookieBack) === 1);
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
$uriString = explode('/', uri_string());
$profiles = new \App\Models\ProfileModel;
$dataProfile = $profiles->getData([
    'paper', 'page_top', 'page_bottom', 'page_left', 'page_right', 'spacing',
    'sign_margin', 'sign_width', 'sign_height', 'sign_space', 'enkrip'
], true)->where(['enkrip_jaminan' => end($uriString)])->data(false);
$profileVal = null;
if ($dataProfile !== null) {
    $profileVal = $dataProfile['enkrip'];
    unset($dataProfile['enkrip']);
    $pageSettings = $dataProfile;
}
?>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg mb-4 mb-lg-0">
                <p class="text-secondary mb-0">ASURANSI</p>
                <p class="text-bold"><?= $jaminan['asuransi_print']; ?> <?= $jaminan['cabang_print']; ?></p>
                <p class="text-secondary mb-0">PRINCIPAL</p>
                <p class="text-bold mb-0"><?= $jaminan['principal']; ?></p>
            </div>
            <div class="col-lg mb-4 mb-lg-0">
                <div class="border-fade pt-3 text-center h-100">
                    <p class="text-bold"><?= $jaminan['jenis']; ?></p>
                    <table class="table table-borderless table-sm text-left">
                        <tr>
                            <td></td>
                            <td class="py-0 fit text-secondary">Nomor</td>
                            <td class="py-0 fit"><span class="text-secondary mr-2">:</span><strong><?= $jaminan['nomor'] ?? '-'; ?></strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="py-0 fit text-secondary">Nilai</td>
                            <td class="py-0 fit"><span class="text-secondary mr-2">:</span><strong><?= $jaminan['currency_2'] . ' ' . nformat($jaminan['nilai']); ?></strong></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg text-center d-flex">
                <div class="w-100 my-auto">
                    <div class="custom-control custom-switch">
                        <input <?= $backBlanko ? 'checked ' : ''; ?>type="checkbox" class="custom-control-input cursor-pointer" id="backmode">
                        <label class="custom-control-label text-<?= $backBlanko ? 'primary ' : 'secondary'; ?> cursor-pointer" for="backmode">Background Blanko</label>
                    </div>
                    <small class="text-info"><i class="fas fa-info-circle mr-2"></i>Hidupkan untuk membantu pengaturan margin</small>
                </div>
            </div>
        </div>
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
$className = '\App\Libraries\PDFExport\ward' . $jaminan['jenis_singkat'] . $jaminan['proyek_id'];
$export = new $className($jaminan);
$export->setting($pageSettings);
if ($backBlanko) $export->setBlanko(base_url('image/content/blanko/MAXIMUS.jpg'));
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
            pdfMake.createPdf(<?= json_encode($export->getPDF()); ?>).open();
        });
        <?php if ($profileVal !== null) : ?>
            $('#profile').val('<?= $profileVal; ?>');
            $('#enkriprofile').val('<?= $profileVal; ?>');
            $('#editprofile').fadeIn();
        <?php endif; ?>
    });
</script>

<?= $this->endSection(); ?>