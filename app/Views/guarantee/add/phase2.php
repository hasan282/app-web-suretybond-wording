<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="mx-auto mw-7">
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <p class="text-muted mb-1">PRINCIPAL</p>
                <h6 class="text-bold"><?= $jaminan['principal']; ?></h6>
                <hr>
                <p class="text-muted mb-1">ASURANSI</p>
                <h6 class="text-bold mb-1"><?= $jaminan['asuransi']; ?></h6>
                <p class="mb-0">KANTOR <?= $jaminan['cabang']; ?></p>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Informasi Proyek</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">

        <?= $this->include('guarantee/add/proyek'); ?>

    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Informasi Jaminan</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">

        <?= $this->include('guarantee/add/jaminan'); ?>

    </div>
</div>
<div class="mx-auto mw-7">
    <div class="card">
        <div class="card-body text-center p-3">
            <a href="/guarantee/detail" class="btn btn-primary text-bold">
                <i class="fas fa-save mr-2"></i>Simpan Data Jaminan
            </a>
            <!-- <button class="btn btn-primary text-bold">
                <i class="fas fa-save mr-2"></i>Simpan Data Jaminan
            </button> -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>

<?= $this->endSection(); ?>