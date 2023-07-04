<?php
$jaminan = $jaminan ?? array();
?>
<table class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th class="text-center border-right">Nomor Jaminan</th>
            <th class="text-center">Jenis Jaminan</th>
            <th>Principal</th>
            <th class="text-center border-left">Nilai Jaminan</th>
            <th class="text-center border-left"><i class="fas fa-cog"></i></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jaminan as $ls) : ?>
            <tr>
                <?php $register = $ls['blanko_nomor'] ?? '<span class="text-secondary">DRAFT</span>'; ?>
                <td class="text-center border-right"><?= str_replace(REGISTER_SECTION, $register, $ls['nomor'] ?? '-'); ?></td>
                <td class="text-center"><?= $ls['jenis'] ?? '-'; ?></td>
                <td><?= $ls['principal']; ?></td>
                <td class="text-center border-left"><?= $ls['nilai'] === null ? '-' : $ls['currency_2'] . nformat($ls['nilai']); ?></td>
                <td class="py-0 align-middle text-center border-left">
                    <a href="/guarantee/detail/<?= $ls['enkrip']; ?>" class="btn btn-info btn-sm text-bold"><i class="fas fa-info-circle mr-2"></i>Detail</a>
                    <?php if ($ls['issued'] === null) : ?>
                        <button class="btn btn-danger ml-1 btn-sm" onclick="deleterow('<?= $ls['enkrip']; ?>')"><i class="fas fa-trash-alt"></i></button>
                    <?php else : ?>
                        <a href="/guarantee/print/<?= $ls['enkrip']; ?>" class="btn btn-secondary ml-1 btn-sm"><i class="fas fa-print"></i></a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>