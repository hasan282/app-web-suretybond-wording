<?php
$jaminan = $jaminan ?? array();
?>
<table class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th class="text-center py-0 align-middle">
                <div class="icheck-secondary">
                    <input type="checkbox" id="checkall">
                    <label for="checkall"></label>
                </div>
            </th>
            <th class="text-center border-right">Asuransi</th>
            <th class="text-center">Jenis Jaminan</th>
            <th>Principal</th>
            <th class="text-center border-left">Nilai Jaminan</th>
            <th class="text-center border-left"><i class="fas fa-cog"></i></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jaminan as $ls) : ?>
            <tr>
                <td class="py-0 text-center align-middle">
                    <div class="icheck-primary">
                        <input type="checkbox" class="checkone" name="check_<?= $ls['enkrip']; ?>" id="check_<?= $ls['enkrip']; ?>">
                        <label for="check_<?= $ls['enkrip']; ?>"></label>
                    </div>
                </td>
                <td class="text-center border-right text-bold"><?= $ls['asuransi_nick'] ?? '-'; ?></td>
                <td class="text-center"><?= $ls['jenis'] ?? '-'; ?></td>
                <td><?= $ls['principal']; ?></td>
                <td class="text-center border-left"><?= $ls['nilai'] === null ? '-' : $ls['symbol'] . nformat($ls['nilai']); ?></td>
                <td class="py-0 align-middle text-center border-left">
                    <a href="/guarantee/detail/<?= $ls['enkrip']; ?>" target="_blank" class="btn btn-default btn-sm text-bold">Info Detail<i class="fas fa-external-link-alt ml-2"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>