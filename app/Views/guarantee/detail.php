<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title text-bold text-olive">Detail Jaminan</h3>
        <div class="card-tools"> <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button> </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-6">
                <div class="text-center">
                    <h6 class="text-bold">Surat Jaminan :</h6>
                </div>
                <div class="text-center py-5 text-fade mt-5">
                    <p><i class="far fa-file-image fa-3x"></i></p>
                    <p>Tidak ada Surat Jaminan</p>
                </div>
                <div class="text-center mb-5"> <a href="" class="btn btn-primary text-bold disabled"><i class="fas fa-upload mr-2"></i>Upload Surat Jaminan</a> </div>
            </div>
            <div class="col-xl-6">
                <div class="text-center">
                    <h5 class="text-bold">Data Jaminan</h5> <a href="" class="btn btn-default btn-sm"><i class="fas fa-edit mr-2"></i>Edit Data Jaminan</a>
                </div>
                <div style="height:800px"></div>
                <div class="table-responsive mt-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th class="text-nowrap">Jenis Jaminan</th>
                                <th>:</th>
                                <td class="text-nowrap">Jaminan Pemeliharaan (PM)</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">Nomor Jaminan</th>
                                <th>:</th>
                                <td class="text-nowrap">23.08.02.1106.DRAFT</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">Nilai Jaminan</th>
                                <th>:</th>
                                <td class="text-nowrap"><?php echo "Rp " . number_format("55452259", 2, ",", "."); ?></td>
                            </tr>
                            <tr>
                                <th>Principal</th>
                                <th>:</th>
                                <td>PT. FIBER TECHNOLOGIES INDONESIA</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">Nomor Kontrak</th>
                                <th>:</th>
                                <td>00637/HK.810/TA-370000/11-2021</td>
                            </tr>
                            <tr>
                                <th>Pekerjaan</th>
                                <th>:</th>
                                <td>MITRATEL 1 LOKASI RING MTEL-LMP-DF021 WITEL LAMPUNG</td>
                            </tr>
                            <tr>
                                <th>Obligee</th>
                                <th>:</th>
                                <td>PT. TELKOM AKSES, C.Q. UNIT FINANCE</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">Jaminan Berlaku</th>
                                <th>:</th>
                                <td class="text-nowrap">366 Hari</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">Berlaku Mulai Tanggal</th>
                                <th>:</th>
                                <td class="text-nowrap">18 November 2023</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">Berlaku Sampai Tanggal</th>
                                <th>:</th>
                                <td class="text-nowrap">18 November 2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-center mt-3"> <a href="" class="btn btn-info text-bold"><i class="fas fa-recycle mr-2"></i>Revisi dan Gunakan Jaminan Baru</a> </div>
            </div>
        </div>
        <div class="mx-auto mw-600 pt-3">
            <div class="text-center"> <button type="button" class="btn btn-link btn-sm text-bold"><i class="fas fa-plus mr-2"></i>Tambahkan Keterangan</button> </div>
            <form action="" method="POST"> <input type="hidden" name="used" value=""> <input type="hidden" name="enkrip" value="">
                <div id="box_keterangan" class=" zero-height"> <label for="keterangan">Keterangan<span id="edit_keterangan" class="text-secondary link-transparent show-tooltip" title="" data-original-title="Edit Keterangan"><i class="fas fa-edit ml-2"></i></span></label> <textarea id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" rows="3" disabled=""></textarea> </div>
                <div id="box_btn_save" class="text-center zero-height"> <button class="btn btn-primary btn-sm text-bold mt-3">Simpan Keterangan</button> </div>
            </form>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>