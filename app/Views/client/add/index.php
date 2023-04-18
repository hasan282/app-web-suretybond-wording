<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="mx-auto mw-9">
    <form method="POST">
        <?= csrf_field(); ?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Informasi Principal</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">

                <?= $this->include('client/add/input'); ?>

            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary text-bold">
                    <i class="fas fa-save mr-2"></i>Simpan Data Principal
                </button>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>