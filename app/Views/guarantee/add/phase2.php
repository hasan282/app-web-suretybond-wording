<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="mx-auto mw-7">
    <div class="card">
        <div class="card-body">
            <!--  
            <table class="table table-borderless table-sm">
                <tr>
                    <td class="fit pr-2 text-bold text-secondary">Principal</td>
                    <td class="text-bold text-secondary">:</td>
                    <td class="text-bold">PT. FIBERHOME TECHNOLOGIES INDONESIA</td>
                </tr>
                <tr>
                    <td class="fit pr-2 text-bold text-secondary">Asuransi</td>
                    <td class="text-bold text-secondary">:</td>
                    <td><span class="text-bold">PT. ASURANSI MAXIMUS GRAHA PERSADA</span> Kantor Cabang Bogor</td>
                </tr>
            </table>
            -->
            <div class="text-center">
                <p class="text-muted mb-1">PRINCIPAL</p>
                <h6 class="text-bold">PT. FIBERHOME TECHNOLOGIES INDONESIA</h6>
                <hr>
                <p class="text-muted mb-1">ASURANSI</p>
                <h6 class="text-bold mb-1">PT. ASURANSI MAXIMUS GRAHA PERSADA</h6>
                <p class="mb-0">Kantor Cabang Bogor</p>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Informasi Proyek</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">

        <?= $this->include('guarantee/add/proyek'); ?>

    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Informasi Jaminan</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">

        <?= $this->include('guarantee/add/jaminan'); ?>

    </div>
</div>
<div class="mx-auto mw-7">
    <div class="card">
        <div class="card-body text-center p-3">
            <a href="/guarantee/detail" class="btn btn-primary text-bold">
                <i class="fas fa-save mr-2"></i>Simpan Data Jaminan
            </a>
            <!-- <button class="btn btn-primary text-bold">
                <i class="fas fa-save mr-2"></i>Simpan Data Jaminan
            </button> -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>

<?= $this->endSection(); ?>