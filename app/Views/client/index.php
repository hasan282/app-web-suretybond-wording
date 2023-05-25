<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php
$dark = get_cookie('DRKMOD') ?? '0';
$darkmode = (intval($dark) === 1);
$table = new \App\Libraries\Tables;
$modelMkt = new \App\Models\MarketingModel;
$principal = $table->clientPrincipal(1);
?>
<div class="row mb-3">
    <div class="col-md">
        <div class="input-group mb-3 mb-md-0">
            <input type="search" id="datasearch" class="form-control" placeholder="Cari Nama Principal">
            <div class="input-group-append">
                <button type="button" id="btn_search" class="btn btn-default">
                    <i class="fas fa-search mx-2"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="col-md">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-filter mr-2"></i>Filter
                </span>
            </div>
            <select id="marketing" class="form-control">
                <option value="ALLDATA">Semua Data</option>
                <?php foreach ($modelMkt->getData()->data() as $mkt) : ?>
                    <option value="<?= $mkt['id']; ?>"><?= $mkt['nama']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="col-xl-3">
        <div class="mw-3 ml-auto mr-md-0 mr-auto mt-xl-0 mt-3">
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
                <h3 class="card-title">Principal <strong id="count_data"><?= $principal->count; ?></strong> Data</h3>
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
            <div class="overlay<?= $darkmode ? ' dark' : ''; ?>" id="infoloader"></div>
            <div class="card-body">
                <div class="border-fade text-center pt-3 pb-2">
                    <h6 class="text-secondary">Informasi Principal</h6>
                </div>
                <div class="mt-4 px-2" id="principalinfo">
                    <div class="text-center text-info">
                        <p>Tekan <i class="fas fa-info-circle"></i> <strong>Info</strong> untuk Menampilkan Informasi Principal</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-7">
        <?= $table->footNavs($principal->page_now, $principal->page_max); ?>
    </div>
</div>

<?= $this->endSection(); ?>