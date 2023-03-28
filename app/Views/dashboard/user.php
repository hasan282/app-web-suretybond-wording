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
                <a href="/client/add" class="btn btn-info btn-block mt-3 text-bold">
                    <i class="fas fa-user-plus mr-2"></i>Principal Baru
                </a>
                <a href="/search" class="btn btn-default btn-block mt-3">
                    <i class="fas fa-search mr-2"></i>Cari Data Jaminan
                </a>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-md-7">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-secondary">Penerbitan Jaminan Terakhir</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped text-nowrap">
                    <thead>
                        <tr>
                            <th class="text-center">No. Register</th>
                            <th class="text-center">Nomor Jaminan</th>
                            <th>Tertanggung</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($x = 0; $x < 5; $x++) : ?>
                            <tr>
                                <td class="text-center">MAX-<strong>012088</strong></td>
                                <td class="text-center">11614032.55006872</td>
                                <td>PT. FIBERHOME TECHNOLOGIES</td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>