<?= $this->extend('template/page_admin'); ?>
<?= $this->section('content'); ?>

<div class="card">
    <div class="card-body">
        <div class="text-center">
            <button type="button" class="btn btn-danger">PDF</button>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<?= $this->section('jscript'); ?>
<?php $export = new \App\Libraries\PDFExport\GonvPB; ?>
<script>
    pdfMake.fonts = <?= json_encode($export->getFont()); ?>;
    $(function() {
        $('button.btn-danger').click(function() {
            pdfMake.createPdf(<?= json_encode($export->getPDF()); ?>).open();
        });
    });
</script>
<?= $this->endSection(); ?>