<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php
$dataModel = new \App\Models\PrincipalData;
$dataRate = $dataModel->getNestRate($principal['id']);
$modelPrincipal = new \App\Models\PrincipalModel;
$dataPeople = $modelPrincipal->getPeople(['nama', 'jabatan'])->where(
    ['id_principal' => $principal['id']]
)->data();
?>
<div class="row">
    <div class="col-xl-5">
        <div class="card">
            <div class="card-body">
                <h6 class="text-center text-bold text-secondary">Informasi</h6>
                <p>
                    <small class="text-info">Nama Principal</small><br>
                    <span class="text-bold"><?= $principal['principal']; ?></span>
                </p>
                <p>
                    <small class="text-info">Alamat</small><br>
                    <span><?= $principal['alamat']; ?></span>
                </p>
                <p>
                    <small class="text-info">Nomor Telpon</small><br>
                    <span><?= $principal['telpon'] ?? '-'; ?></span>
                </p>
                <p>
                    <small class="text-info">Email</small><br>
                    <span><?= $principal['email'] ?? '-'; ?></span>
                </p>
                <p class="mb-2">
                    <small class="text-info">Pejabat Penandatangan</small>
                </p>
                <table class="table table-bordered table-sm">
                    <thead>
                        <th class="text-center">#</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Jabatan</th>
                    </thead>
                    <?php foreach ($dataPeople as $num => $pl) : ?>
                        <tr>
                            <td class="text-bold fit px-2"><?= $num + 1; ?></td>
                            <td class="px-2"><?= $pl['nama']; ?></td>
                            <td><?= $pl['jabatan']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        <div class="card">

            <?= $this->include('client/detail/up2'); ?>

        </div>
    </div>
    <div class="col-xl-7">
        <div class="card">
            <div class="card-body">
                <h6 class="text-center text-bold text-secondary">Rate Principal</h6>
                <?php foreach ($dataRate as $dr) : ?>
                    <h6 class="mt-4 text-bold"><?= $dr['asuransi']; ?></h6>
                    <?php foreach ($dr['proyek'] as $pro) : ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th class="text-info px-2 text-nowrap"><?= $pro['nama']; ?></th>
                                        <th class="text-center">Rate</th>
                                        <th class="text-center">Minimum</th>
                                        <th class="text-center">Admin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pro['rate'] as $rate) : ?>
                                        <tr>
                                            <td class="text-nowrap"><?= $rate['jenis']; ?></td>
                                            <td class="text-center text-nowrap"><?= to_decimal($rate['rate']); ?> %</td>
                                            <td class="text-right">Rp<?= nformat($rate['minimum'], 0); ?></td>
                                            <td class="text-right">Rp<?= nformat($rate['admin'], 0); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>