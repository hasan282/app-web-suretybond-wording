<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php
$pageSettings = array(
    'paper' => 'A4',
    'page_top' => '180',
    'page_left' => '70',
    'page_right' => '70',
    'page_bottom' => '10',
    'sign_margin' => '70',
    'sign_width' => '190',
    'sign_height' => '80',
    'sign_space' => '35'
);
?>
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
            <div class="col-7"></div>
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
$export = new \App\Libraries\PDFExport\GonvPB($jaminan);
$export->setting($pageSettings);
$export->setBlanko(base_url('image/content/blanko/MAXIMUS.jpg'));
?>

<?= $this->section('jscript'); ?>

<script>
    pdfMake.fonts = <?= json_encode($export->getFont()); ?>;
    $(function() {
        $('#buttonpdf').click(function() {
            pdfMake.createPdf(<?= json_encode($export->getPDF()); ?>).open();
        });
    });
</script>

<?= $this->endSection(); ?>