<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="card">
    <div class="card-body">

        <?php var_dump(userdata()); ?>

    </div>
</div>

<?= $this->endSection(); ?>