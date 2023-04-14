<?php
$clients = array(
    'PT. CITRA GUMILANG PRATAMA',
    'PT. DHARMA HUTAMA KARYA',
    'PT. DINAYA SEJAHTERA ABADI',
    'PT. ENDAVO CITA PERKASA',
    'PT. FIBERHOME TECHNOLOGIES INDONESIA',
    'PT. INDONESIA FERRY PROPERTI',
    'PT. INFITECH SOLUSI INDONESIA',
    'PT. MANDALA PUTERA PRIMA',
    'PT. PALAPA TIMUR TELEMATIKA'
);
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
        <?php foreach ($clients as $num => $cn) : ?>
            <tr>
                <td class="text-center text-bold border-right fit"><?= $num + 1; ?></td>
                <td class="py-0 align-middle text-center fit">
                    <span class="btn btn-info btn-sm pb-1 text-bold">
                        <i class="fas fa-info-circle mr-2"></i>info
                    </span>
                </td>
                <td class="border-left"><?= $cn; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>