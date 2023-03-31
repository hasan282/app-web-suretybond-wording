<table class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th class="text-center border-right">No.</th>
            <th class="text-center"><i class="fas fa-cog"></i></th>
            <th class="border-left">Nama Principal</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($r = 0; $r < 10; $r++) : ?>
            <tr>
                <td class="text-center text-bold border-right fit"><?= $r + 1; ?></td>
                <td class="py-0 align-middle text-center fit">
                    <span class="btn btn-info btn-sm pb-1 text-bold">
                        <i class="fas fa-info-circle mr-2"></i>info
                    </span>
                </td>
                <td class="border-left">PT. FIBERHOME TECHNOLOGIES INDONESIA</td>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>