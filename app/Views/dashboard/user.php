<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php
$widget = array(
    [
        'title' => 'Draft Jaminan',
        'icon' => 'fas fa-file-alt',
        'link' => 'guarantee',
        'color' => 'secondary',
        'data' => '518'
    ],
    [
        'title' => 'Jaminan Diterbitkan',
        'icon' => 'fas fa-certificate',
        'link' => 'guarantee/issued',
        'color' => 'olive',
        'data' => '2457'
    ],
    [
        'title' => 'Data Nasabah',
        'icon' => 'fas fa-briefcase',
        'link' => 'client',
        'color' => 'info',
        'data' => '32'
    ]
);
?>
<div class="row">
    <?php foreach ($widget as $wi) : ?>
        <div class="col-sm">
            <div class="small-box bg-<?= $wi['color']; ?>">
                <div class="inner px-3">
                    <h3><?= nformat(intval($wi['data']), 0); ?></h3>
                    <p><?= $wi['title']; ?></p>
                </div>
                <div class="icon">
                    <i class="<?= $wi['icon']; ?>"></i>
                </div>
                <a href="/<?= $wi['link']; ?>" class="small-box-footer text-sm">
                    Lihat Data<i class="fas fa-arrow-circle-right ml-2"></i>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div class="row">
    <div class="col-xl-4 col-md-5">
        <div class="card">
            <div class="card-body">
                <a href="/guarantee/add" class="btn btn-primary btn-lg btn-block text-bold">
                    <i class="fas fa-certificate mr-2"></i>Buat Jaminan Baru
                </a>
                <a href="/client/add" class="btn btn-info btn-block mt-2 text-bold">
                    <i class="fas fa-user-plus mr-2"></i>Principal Baru
                </a>
                <a href="/search" class="btn btn-default btn-block mt-2">
                    <i class="fas fa-search mr-2"></i>Cari Data Jaminan
                </a>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-md-7">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-secondary">
                    <i class="fas fa-bell mr-2"></i>Notifikasi
                </h3>
            </div>
            <div class="card-body">
                <div class="d-flex" style="min-height:93px">
                    <h6 class="text-secondary my-auto mx-auto">Tidak ada Notifikasi</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>