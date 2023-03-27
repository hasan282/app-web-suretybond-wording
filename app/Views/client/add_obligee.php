<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Tambah Data Obligee</h3>
    </div>
    <div class="card-body">
        <form method="POST">
            <div class="form-group">
                <label>Nama Pemilik Proyek</label>
                <input type="text" class="form-control" name="nama_pemilik_proyek" placeholder="Nama Pemilik Proyek" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat"></textarea>
            </div>
            <div class="form-group">
                <label>Nama Proyek</label>
                <input type="text" class="form-control" name="nama_proyek" placeholder="Nama Proyek" required>
            </div>
            <div class="form-group">
                <label>Kelompok Pekerjaan</label>
                <select class="form-control" name="kelompok_pekerjaan">
                    <option>Pilih Kelompok Pekerjaan</option>
                    <option value="1">Konstruksi</option>
                    <option value="2">Instalasi</option>
                    <option value="3">Supply</option>
                    <option value="4">Konsultan</option>
                    <option value="5">Lainnya</option>
                </select>
            </div>
            <div class="form-group">
                <label>Nilai Proyek</label>
                <input type="text" class="form-control" name="nilai_proyek" placeholder="Nilai Proyek" required>
            </div>
            <div class="form-group">
                <label>Sumber Dana Proyek</label>
                <select class="form-control" name="sumber_dana_proyek">
                    <option>Pilih Sumber Dana Proyek</option>
                    <option value="1">APBN</option>
                    <option value="2">APBD</option>
                    <option value="3">LOAN</option>
                    <option value="5">Lainnya</option>
                </select>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="customFile">Example file input</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="dokumen_pendukung">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Tanggal:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" name="tanggal_dokumen" data-target="#reservationdate" />
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <!-- <a href="#" class="btn btn-primary">Submit</a> -->
        </form>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>
<script>
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
</script>
<?= $this->endSection(); ?>