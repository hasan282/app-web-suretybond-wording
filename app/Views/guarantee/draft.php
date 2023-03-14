<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<!-- Card Table -->
<div class="card">
    <!-- <div class="overlay" id="loading"></div> -->
    <div class="card-header">
        <h3 class="card-title">Data Jaminan Terbuat <strong id="count_data">10</strong></h3>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr class="text-center">
                    <th>Nomor Jaminan</th>
                    <th>Principal</th>
                    <th>Nilai Jaminan</th>
                    <th><i class="fas fa-cog"></i></th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td><b>23.08.02.1106.DRAFT</b></td>
                    <td class="text-bold">PT. FIBER TECHNOLOGIES INDONESIA</td>
                    <td><?php echo "Rp " . number_format("55452259", 2, ",", "."); ?></td>
                    <td>
                        <a href="guarantee/detail" class="btn btn-info btn-sm text-bold"><i class="fas fa-info-circle mr-2"></i>Detail</a>
                        <a href="" target="_blank" class="btn btn-default ml-1 btn-sm text-bold"><i class="fas fa-external-link-alt"></i></a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<!-- Card Halaman(paggination) -->
<div class="card">
    <div class="card-body py-3">
        <div class="row">
            <div class="col-md d-flex">
                <p class="my-auto mx-md-2 mx-auto">
                    <span class="text-muted">Halaman </span><span id="halaman" class="text-bold">1</span><span class="text-muted"> dari </span><span id="halaman_max" class="text-bold">1</span>
                </p>
            </div>
            <div class="col-md text-center">
                <div class="btn-group mt-md-0 mt-3">
                    <button type="button" class="btn btn-secondary data-nav" data-page="first" disabled>
                        <i class="fas fa-angle-double-left"></i>
                    </button>
                    <button type="button" class="btn btn-secondary data-nav" data-page="prev" disabled>
                        <i class="fas fa-angle-left"></i>
                    </button>
                    <button type="button" class="btn btn-secondary data-nav" data-page="next" disabled>
                        <i class="fas fa-angle-right"></i>
                    </button>
                    <button type="button" class="btn btn-secondary data-nav" data-page="last" disabled>
                        <i class="fas fa-angle-double-right"></i>
                    </button>
                </div>
            </div>
            <div class="col-md text-center text-md-right">
                <button class="btn btn-default" disabled>Lihat Semua Kolom<i class="fas fa-external-link-alt ml-2"></i></button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>