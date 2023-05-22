<?php
$principal = $principal ?? array();
$numOffset = ($pages['page_now'] - 1) * $pages['limit'];
?>
<table class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th class="text-center border-right">No.</th>
            <th class="text-center"><i class="fas fa-cog"></i></th>
            <th class="border-left">Nama Principal</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($principal as $num => $pr) : ?>
            <tr>
                <td class="text-center text-bold border-right fit"><?= $num + $numOffset + 1; ?></td>
                <td class="py-0 align-middle text-center fit">
                    <span class="btn btn-info btn-sm pb-1 text-bold" data-detail="<?= $pr['enkrip']; ?>" onclick="showinfo(this)">
                        <i class="fas fa-info-circle mr-2"></i>info
                    </span>
                </td>
                <td class="border-left"><?= $pr['principal']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>