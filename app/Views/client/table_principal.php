<table class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th class="text-center border-right">No.</th>
            <th>Nama Principal</th>
            <th>Nama Pejabat</th>
            <th class="text-center border-left">Active</th>
            <th class="text-center border-left"><i class="fas fa-cog"></i></th>
        </tr>
    </thead>
    <tbody>
        <?php for ($r = 0; $r < 10; $r++) : ?>
            <tr>
                <td class="text-center text-bold border-right"><?= $r + 1; ?></td>
                <td>PT. FIBERHOME TECHNOLOGIES INDONESIA</td>
                <td>Lorem ipsum dolor</td>
                <td class="text-center border-left py-0 align-middle">
                    <div class="form-group my-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" <?= ($r != 9) ? ' checked' : ''; ?> id="active_<?= $r; ?>">
                            <label class="custom-control-label text-<?= ($r != 9) ? 'primary' : 'secondary'; ?>" for="active_<?= $r; ?>"><i class="fas fa-<?= ($r != 9) ? 'check' : 'times'; ?>"></i></label>
                        </div>
                    </div>
                </td>
                <td class="py-0 align-middle text-center border-left">
                    <a href="/client/detail" class="btn btn-info btn-sm text-bold disabled"><i class="fas fa-info-circle mr-2"></i>Detail</a>
                    <a href="/client/edit" class="btn btn-secondary ml-1 btn-sm disabled"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>