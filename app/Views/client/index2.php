<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="row mb-3">
    <div class="col">

        <div class="input-group">
            <input type="search" id="datasearch" class="form-control" placeholder="Cari Nama Principal">
            <div class="input-group-append">
                <button type="button" id="btn_search" class="btn btn-default">
                    <i class="fas fa-search mx-2"></i>
                </button>
            </div>
        </div>

    </div>
    <div class="col"></div>
    <div class="col">
        <a href="#" class="btn btn-primary btn-block text-bold">
            <i class="fas fa-plus mr-2"></i>Tambah Principal Baru
        </a>
    </div>
</div>
<div class="card">

    <div class="card-header">
        <h3 class="card-title">Principal <strong id="count_data">10</strong> Data</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool btn-expand" data-expand="0">
                <i class="fas fa-expand-alt"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>

    <div class="card-body table-responsive p-0">
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
    </div>
</div>

<?= $this->include('table/nav_foot'); ?>

<?= $this->endSection(); ?>