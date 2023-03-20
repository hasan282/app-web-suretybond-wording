<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="row mb-3">
    <div class="col-xl-4 col-md-5 col-sm-6">

        <?= $this->include('guarantee/switcher'); ?>

    </div>
    <div class="col-xl-5 col-md-7 col-sm-6 pt-2 pt-sm-0">
        <div class="input-group">
            <input type="search" id="blanko_number" class="form-control" placeholder="Pencarian">
            <div class="input-group-append">
                <button type="button" id="btn_search" class="btn btn-default">
                    <i class="fas fa-search mx-2"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="col-xl-3 pt-2 pt-xl-0">
        <div class="mw-3 ml-auto mr-xl-0 mr-auto">
            <a href="/guarantee/add" class="btn btn-primary text-bold btn-block">
                <i class="fas fa-plus mr-2"></i>Buat Jaminan Baru
            </a>
        </div>
    </div>
</div>

<div class="card">
    <!-- <div class="overlay" id="loading"></div> -->
    <div class="card-header">
        <h3 class="card-title">Draft Jaminan <strong id="count_data">10</strong> Data</h3>
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

    </div>
</div>

<?= $this->include('table/nav_foot'); ?>

<?= $this->endSection(); ?>