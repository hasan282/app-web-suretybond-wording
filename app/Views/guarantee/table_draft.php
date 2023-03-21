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
        <?php for ($r = 0; $r < 10; $r++) : ?>
            <tr>
                <td class="text-center border-right">23.08.02.1106.DRAFT</td>
                <td class="text-center">Jaminan Penawaran</td>
                <td>PT. FIBER TECHNOLOGIES INDONESIA</td>
                <td class="text-center border-left">Rp. 52.614.900,00</td>
                <td class="py-0 align-middle text-center border-left">
                    <a href="/guarantee/detail" class="btn btn-info btn-sm text-bold"><i class="fas fa-info-circle mr-2"></i>Detail</a>
                    <a href="/guarantee/detail" class="btn btn-danger ml-1 btn-sm disabled"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>