<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<form method="POST">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Principal dan Asuransi</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md">
                    <div class="border-fade px-4 pt-3 pb-2 mb-3">
                        <?= $this->include('guarantee/add/principal'); ?>
                    </div>
                </div>
                <div class="col-md">
                    <div class="border-fade px-4 pt-3 pb-2">
                        <?= $this->include('guarantee/add/asuransi'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body p-3 text-md-right text-center">
            <!-- <button type="submit" class="btn btn-primary text-bold">Simpan dan Lanjutkan</button> -->
            <a href="/guarantee/add/abc12345" class="btn btn-primary text-bold">Simpan dan Lanjutkan<i class="fas fa-arrow-circle-right ml-3"></i></a>
        </div>
    </div>
</form>

<?= $this->endSection(); ?>