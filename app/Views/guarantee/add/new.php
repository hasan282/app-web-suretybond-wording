<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md">

        <?= $this->include('guarantee/add/principal'); ?>

    </div>
    <div class="col-md">

        <?= $this->include('guarantee/add/asuransi'); ?>

    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>

<?= $this->endSection(); ?>