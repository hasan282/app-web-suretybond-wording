<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php
$dark = get_cookie('DRKMOD') ?? '0';
$darkmode = (intval($dark) === 1);
$table = new \App\Libraries\Tables;
$principal = $table->clientPrincipal(1);
?>
<div class="row mb-3">
    <div class="col">

        <div class="input-group">
            <input type="search" id="datasearch" class="form-control" placeholder="Cari Nama Principal">
            <div class="input-group-append">
                <button type="button" id="btn_search" class="btn btn-default">
                    <i class="fas fa-search mx-2"></i>
                </button>
            </div>
        </div>

    </div>
    <div class="col">
        <a href="/client/obligee" class="btn btn-default btn-block text-bold">
            <i class="fas fa-database mr-2"></i>Lihat Data Obligee
        </a>
    </div>
    <div class="col">
        <a href="/client/principal/add" class="btn btn-primary btn-block text-bold">
            <i class="fas fa-plus mr-2"></i>Tambah Principal Baru
        </a>
    </div>
</div>
<div class="card">
    <div class="overlay<?= $darkmode ? ' dark' : ''; ?>" id="loading"></div>
    <div class="card-header">
        <h3 class="card-title">Principal <strong id="count_data">10</strong> Data</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool btn-expand" data-expand="0">
                <i class="fas fa-expand-alt"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body table-responsive p-0" id="principal">

        <?= $principal->content; ?>

    </div>
</div>

<?= $this->include('table/nav_foot'); ?>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>
<script>
    $(function() {
        $('#loading').setLoader({
            icon: 'fas fa-circle-notch'
        });
    });
</script>
<?= $this->endSection(); ?>