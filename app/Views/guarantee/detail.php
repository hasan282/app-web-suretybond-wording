<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title text-secondary">Detail Data Jaminan</h3>
        <div class="card-tools"> <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button> </div>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-xl-9 col-lg-8">

                <div class="table-responsive">
                    <table class="table table-borderless table-sm">
                        <!-- <table class="table table-bordered table-sm"> -->

                        <tr>
                            <td class="fit pr-3 text-bold">Jenis Jaminan</td>
                            <td class="text-bold">:</td>
                            <td class="text-nowrap">Jaminan Pemeliharaan (PM)</td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold">Nomor Jaminan</td>
                            <td class="text-bold">:</td>
                            <td class="text-nowrap">23.08.02.1106.DRAFT</td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold">Nilai Jaminan</td>
                            <td class="text-bold">:</td>
                            <td class="text-nowrap"><?php echo "Rp " . number_format("55452259", 2, ",", "."); ?></td>
                        </tr>


                        <tr class="border-top">
                            <td colspan="3" class="text-bold text-secondary">ASURANSI</td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Nama Asuransi</td>
                            <td class="text-bold">:</td>
                            <td>PT. ASURANSI MAXIMUS</td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Alamat</td>
                            <td class="text-bold">:</td>
                            <td>Ruko VIP No. 88 B Jl. Raya Pajajaran, Bogor 16128</td>
                        </tr>


                        <tr class="border-top">
                            <td colspan="3" class="text-bold text-secondary">PRINCIPAL</td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Nama Principal</td>
                            <td class="text-bold">:</td>
                            <td>PT. FIBERHOME TECHNOLOGIES INDONESIA</td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Alamat</td>
                            <td class="text-bold">:</td>
                            <td>APL Tower Lantai 30, Jl. Jend. S. Parman Kav. 28, Jakarta Barat 11470</td>
                        </tr>


                        <tr class="border-top">
                            <td colspan="3" class="text-bold text-secondary">OBLIGEE</td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Nama Obligee</td>
                            <td class="text-bold">:</td>
                            <td>PT. EKA MAS REPUBLIK</td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Alamat</td>
                            <td class="text-bold">:</td>
                            <td>SML Plaza, Tower 2, Lt.25, Jl. MH Thamrin No.51 Jakarta Pusat</td>
                        </tr>

                        <tr class="border-top">
                            <td class="fit pr-3 text-bold">Nomor Kontrak</td>
                            <td class="text-bold">:</td>
                            <td>00637/HK.810/TA-370000/11-2021</td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold">Pekerjaan</td>
                            <td class="text-bold">:</td>
                            <td>MITRATEL 1 LOKASI RING MTEL-LMP-DF021 WITEL LAMPUNG</td>
                        </tr>

                        <tr>
                            <td class="fit pr-3 text-bold">Jaminan Berlaku</td>
                            <td class="text-bold">:</td>
                            <td class="text-nowrap">366 Hari</td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold">Berlaku Mulai Tanggal</td>
                            <td class="text-bold">:</td>
                            <td class="text-nowrap">18 November 2023</td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold">Berlaku Sampai Tanggal</td>
                            <td class="text-bold">:</td>
                            <td class="text-nowrap">18 November 2024</td>
                        </tr>

                    </table>
                </div>

            </div>
            <div class="col-xl-3 col-lg-4">

                <div class="mw-2 mx-auto position-relative" style="height:100%;min-height:200px">
                    <button class="btn btn-secondary btn-sm btn-block">
                        <i class="fas fa-edit mr-2"></i>Edit Data Jaminan
                    </button>
                    <button class="btn btn-danger btn-sm mt-2 btn-block">
                        <i class="fas fa-trash-alt mr-2"></i>Hapus Data Jaminan
                    </button>

                    <div class="absolute-bottom pb-3 text-center w-100">
                        <small class="text-danger"><i class="fas fa-info-circle mr-2"></i>Data Belum Lengkap</small>
                        <a href="/guarantee/print" class="btn btn-primary btn-lg mt-2 btn-block">
                            <i class="fas fa-print mr-2"></i>Cetak Jaminan
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>