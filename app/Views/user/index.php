<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="card">
    <div class="card-body">

        <p class="text-bold mb-1"><?= userdata('nama'); ?></p>
        <p class="text-sm text-secondary"><?= userdata('office'); ?></p>
        <small><?= userdata('role'); ?></small>

    </div>
</div>

<?= $this->endSection(); ?>