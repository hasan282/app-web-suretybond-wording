<?php
$modelPrincipal = new \App\Models\PrincipalModel;
$people = $modelPrincipal->getPeople(['nama', 'jabatan'])->where(
    ['id_principal' => $principal['id']]
)->data();
?>
<div class="text-right">
    <a href="/client/detail/<?= $principal['enkrip']; ?>" target="_blank" class="btn btn-default btn-sm">
        Detail dan Informasi Rate<i class="fas fa-external-link-alt ml-2"></i>
    </a>
</div>
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
    <?php foreach ($people as $num => $pl) : ?>
        <tr>
            <td class="text-bold fit px-2"><?= $num + 1; ?></td>
            <td class="px-2"><?= $pl['nama']; ?> <span class="text-secondary">(<?= $pl['jabatan']; ?>)</span></td>
        </tr>
    <?php endforeach; ?>
</table>
<div class="text-center mt-4">
    <!--  
    <p class="text-secondary mb-1">Status : <strong class="text-success">Aktif</strong></p>
    <div class="mb-4">
        <button class="btn btn-default btn-sm">Nonaktifkan</button>
    </div>
    -->
    <a href="/guarantee/add?client=<?= $principal['enkrip']; ?>" class="btn btn-primary text-bold">
        <i class="fas fa-certificate mr-2"></i>Buat Jaminan Baru
    </a>
</div>