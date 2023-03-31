<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php
$dark = get_cookie('DRKMOD') ?? '0';
$darkmode = (intval($dark) === 1);
$table = new \App\Libraries\Tables;
$principal = $table->clientPrincipal(1);
?>
<div class="row mb-3">
    <div class="col-sm">
        <div class="input-group mb-3 mb-sm-0 mw-4">
            <input type="search" id="datasearch" class="form-control" placeholder="Cari Nama Principal">
            <div class="input-group-append">
                <button type="button" id="btn_search" class="btn btn-default">
                    <i class="fas fa-search mx-2"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="col-sm">
        <div class="mw-3 ml-auto mr-sm-0 mr-auto">
            <a href="/client/add" class="btn btn-primary btn-block text-bold">
                <i class="fas fa-plus mr-2"></i>Tambah Principal Baru
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-7 col-md-6">
        <div class="card">
            <div class="overlay<?= $darkmode ? ' dark' : ''; ?>" id="loading"></div>
            <div class="card-header">
                <h3 class="card-title">Principal <strong id="count_data">10</strong> Data</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body table-responsive p-0" id="principal">

                <?= $principal->content; ?>

            </div>
        </div>

    </div>
    <div class="col-xl-5 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="border-fade text-center pt-3 pb-2">
                    <h6 class="text-secondary">Informasi Principal</h6>
                </div>
                <div class="mt-4 px-2">

                    <?= $this->include('client/info'); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-7">
        <?= $this->include('table/nav_foot'); ?>
    </div>
</div>

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