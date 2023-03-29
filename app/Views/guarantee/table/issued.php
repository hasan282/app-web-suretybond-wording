<?php
$list = $list ?? array();
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
        <?php foreach ($list as $ls) : ?>
            <tr>
                <td class="text-center border-right">
                    <span class="text-secondary"><?= $ls['prefix']; ?></span><strong><?= $ls['register']; ?></strong>
                </td>
                <td class="text-center"><?= $ls['nomor']; ?></td>
                <td class="text-center"><?= $ls['jenis']; ?></td>
                <td class="border-left"><?= $ls['principal']; ?></td>
                <td class="py-0 align-middle text-center border-left">
                    <a href="/guarantee/detail" class="btn btn-info btn-sm text-bold">
                        <i class="fas fa-info-circle mr-2"></i>Detail
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>