<?php
$jaminan = $jaminan ?? array();
?>
<table class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th class="text-center border-right">No. Register</th>
            <th class="text-center">Nomor Jaminan</th>
            <th class="text-center">Jenis Jaminan</th>
            <th class="border-left">Principal</th>
            <th class="text-center border-left"><i class="fas fa-cog"></i></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jaminan as $ls) : ?>
            <tr>
                <td class="text-center border-right">
                    <span class="text-secondary"><?= $ls['prefix_print']; ?></span><strong><?= $ls['blanko_print']; ?></strong>
                </td>
                <td class="text-center"><?= str_replace(REGISTER_SECTION, $ls['blanko_nomor'], $ls['nomor']); ?></td>
                <td class="text-center"><?= $ls['jenis']; ?></td>
                <td class="border-left"><?= $ls['principal']; ?></td>
                <td class="py-0 align-middle text-center border-left">
                    <a href="/guarantee/detail/<?= $ls['enkrip']; ?>" class="btn btn-info btn-sm text-bold">
                        <i class="fas fa-info-circle mr-2"></i>Detail
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>