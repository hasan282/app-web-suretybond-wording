<?php
$numberModel = new \App\Models\JaminanNumber([
    'cabang' => $jaminan['cabang_id'],
    'jenis' => $jaminan['jenis_id'],
    'proyek' => $jaminan['proyek_id'],
    'issued' => $jaminan['issued_date']
]);
$numberModel->isConditional(
    $jaminan['conditional'] === null ? null : intval($jaminan['conditional']) === 1
);
$numberModel->isKonstruksi(
    $jaminan['pekerjaan_id'] === null ? null : intval($jaminan['pekerjaan_id']) === 110
);
$jaminanNumber = $numberModel->getNomor();
?>
<div class="table-responsive">
    <table class="table table-borderless table-sm">
        <tr>
            <td colspan="3" class="text-bold text-secondary">JAMINAN</td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Jenis Jaminan</td>
            <td class="text-bold">:</td>
            <td class="text-nowrap text-bold"><?= $jaminan['jenis'] ?? '-'; ?></td>
        </tr>
        <tr>
            <?php $bahasa = array('ID' => 'Bahasa Indonesia', 'EN' => 'English'); ?>
            <td class="fit pr-3 text-bold pl-4">Bahasa</td>
            <td class="text-bold">:</td>
            <td class="text-nowrap"><?= array_key_exists($jaminan['bahasa'], $bahasa) ? $bahasa[$jaminan['bahasa']] : '-'; ?></td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Nomor Jaminan</td>
            <td class="text-bold">:</td>
            <td class="text-nowrap">
                <?= $jaminan['nomor'] ?? ($numberModel->getMessage('<span class="text-danger"><i class="fas fa-exclamation-circle mr-2"></i>penomoran ', '</span>') ?? '-'); ?>
            </td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Nilai Jaminan</td>
            <td class="text-bold">:</td>
            <td class="text-nowrap">
                <?= $jaminan['symbol']; ?>
                <?= nformat($jaminan['nilai']); ?>
            </td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Berlaku</td>
            <td class="text-bold">:</td>
            <td class="text-nowrap"><?= $jaminan['days'] ?? '0'; ?> Hari</td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Mulai Tanggal</td>
            <td class="text-bold">:</td>
            <td class="text-nowrap"><?= fdate($jaminan['date_from']) ?? '-'; ?></td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Sampai Tanggal</td>
            <td class="text-bold">:</td>
            <td class="text-nowrap"><?= fdate($jaminan['date_to']) ?? '-'; ?></td>
        </tr>
        <tr>
            <?php $conditions = array('UNCONDITIONAL (tanpa syarat)', 'CONDITIONAL (dengan syarat)', '-'); ?>
            <td class="fit pr-3 text-bold pl-4">Pencairan Klaim</td>
            <td class="text-bold">:</td>
            <td class="text-nowrap"><?= $conditions[intval($jaminan['conditional'] ?? '2')]; ?></td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Tanggal Penerbitan</td>
            <td class="text-bold">:</td>
            <td class="text-nowrap"><?= $jaminan['issued_place'] ?? '-'; ?>, <?= fdate($jaminan['issued_date']) ?? '-'; ?></td>
        </tr>
        <tr class="border-top">
            <td colspan="3" class="text-bold text-secondary">ASURANSI</td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Nama Asuransi</td>
            <td class="text-bold">:</td>
            <td class="text-bold"><?= $jaminan['asuransi']; ?></td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Alamat</td>
            <td class="text-bold">:</td>
            <td><?= $jaminan['cabang_alamat']; ?></td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Penandatangan</td>
            <td class="text-bold">:</td>
            <td><?= $jaminan['cabang_pejabat']; ?> (<?= $jaminan['cabang_jabatan']; ?>)</td>
        </tr>
        <tr class="border-top">
            <td colspan="3" class="text-bold text-secondary">PRINCIPAL</td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Nama Principal</td>
            <td class="text-bold">:</td>
            <td class="text-bold"><?= $jaminan['principal']; ?></td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Alamat</td>
            <td class="text-bold">:</td>
            <td><?= $jaminan['principal_alamat']; ?></td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Penandatangan</td>
            <td class="text-bold">:</td>
            <td><?= $jaminan['principal_pejabat']; ?> (<?= $jaminan['principal_jabatan']; ?>)</td>
        </tr>

        <tr class="border-top">
            <td colspan="3" class="text-bold text-secondary">PROYEK</td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Jenis Proyek</td>
            <td class="text-bold">:</td>
            <td><?= $jaminan['proyek'] ?? '-'; ?></td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Nama Proyek</td>
            <td class="text-bold">:</td>
            <td><?= $jaminan['proyek_nama'] ?? '-'; ?></td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Lokasi Proyek</td>
            <td class="text-bold">:</td>
            <td><?= $jaminan['proyek_alamat'] ?? '-'; ?></td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Nilai Proyek</td>
            <td class="text-bold">:</td>
            <td>
                <?= $jaminan['symbol']; ?>
                <?= nformat($jaminan['proyek_nilai']); ?>
            </td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Dokumen Pendukung</td>
            <td class="text-bold">:</td>
            <td>
                <?= $jaminan['dokumen'] ?? '-'; ?>
                <?= $jaminan['dokumen_date'] != null ? 'tanggal ' . fdate($jaminan['dokumen_date']) : ''; ?>
            </td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Kelompok Pekerjaan</td>
            <td class="text-bold">:</td>
            <td><?= $jaminan['pekerjaan'] ?? '-'; ?></td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Pemilik Proyek</td>
            <td class="text-bold">:</td>
            <td><?= $jaminan['obligee'] ?? '-'; ?></td>
        </tr>
        <tr>
            <td class="fit pr-3 text-bold pl-4">Alamat Pemilik Proyek</td>
            <td class="text-bold">:</td>
            <td><?= $jaminan['obligee_alamat'] ?? '-'; ?></td>
        </tr>
    </table>
</div>