<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col">
        <div class="small-box bg-danger">
            <div class="inner px-3">
                <h3>158</h3>
                <p>Draft Jaminan</p>
            </div>
            <div class="icon">
                <i class="fas fa-file-alt"></i>
            </div>
            <a href="/guarantee" class="small-box-footer">
                Lihat Data<i class="fas fa-arrow-circle-right ml-2"></i>
            </a>
        </div>
    </div>
    <div class="col">
        <div class="small-box bg-olive">
            <div class="inner px-3">
                <h3>1.312</h3>
                <p>Jaminan Diterbitkan</p>
            </div>
            <div class="icon">
                <i class="fas fa-certificate"></i>
            </div>
            <a href="/guarantee" class="small-box-footer">
                Lihat Data<i class="fas fa-arrow-circle-right ml-2"></i>
            </a>
        </div>
    </div>
    <div class="col">
        <div class="small-box bg-info">
            <div class="inner px-3">
                <h3>71</h3>
                <p>Data Klien</p>
            </div>
            <div class="icon">
                <i class="fas fa-briefcase"></i>
            </div>
            <a href="/client" class="small-box-footer">
                Lihat Data<i class="fas fa-arrow-circle-right ml-2"></i>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <a href="/guarantee/add" class="btn btn-outline-primary btn-block text-bold">
                    <i class="fas fa-certificate mr-2"></i>Buat Jaminan Baru
                </a>
            </div>
        </div>
    </div>
    <div class="col-8">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-secondary">Penerbitan Jaminan Terakhir</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped text-nowrap">
                    <thead>
                        <tr>
                            <th class="text-center">No. Register</th>
                            <th class="text-center">Nomor Jaminan</th>
                            <th>Tertanggung</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($x = 0; $x < 5; $x++) : ?>
                            <tr>
                                <td class="text-center">MAX-<strong>012088</strong></td>
                                <td class="text-center">11614032.55006872</td>
                                <td>PT. FIBERHOME TECHNOLOGIES</td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>