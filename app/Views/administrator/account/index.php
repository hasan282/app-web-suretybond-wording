<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data User Account</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool btn-expand" data-expand="0">
                <i class="fas fa-expand-alt"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body table-responsive p-0" id="guarantee">

        <?= $this->include('table/skeleton1'); ?>

    </div>
</div>

<?= $this->endSection(); ?>