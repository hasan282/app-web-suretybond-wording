<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Tambah Data Jaminan</h3>
    </div>
    <div class="card-body">
        <form method="POST">
            <div class="form-group">
                <label>Asuransi</label>
                <select class="form-control" name="asuransi">
                    <option value="1">PT. ASURANSI BINAGRIYA UPAKARA</option>
                    <option value="2">PT. ASURANSI MAXIMUS GRAHA PERSADA</option>
                    <option value="3">PT. ASURANSI UMUM BUMIPUTERA MUDA</option>
                    <option value="4">PT. KRESNA MITRA</option>
                </select>
            </div>
            <div class="form-group">
                <label>Cabang Asuransi</label>
                <select class="form-control" name="cabang_asuransi">
                    <option value="1">Kantor Pusat</option>
                    <option value="2">Kantor Cabang 1</option>
                    <option value="3">Kantor Cabang 2</option>
                    <option value="4">Kantor Cabang 3</option>
                    <option value="5">Kantor Cabang 4</option>
                </select>
            </div>
            <div class="form-group">
                <label>Jenis Asuransi</label>
                <select class="form-control" name="jenis_asuransi">
                    <option value="1">Asuransi Jiwa</option>
                    <option value="2">Asuransi Kesehatan</option>
                    <option value="3">Asuransi Pendidikan</option>
                </select>
            </div>
            <div class="form-group">
                <label>No. Jaminan</label>
                <input type="text" class="form-control" name="no_jaminan" placeholder="No. Jaminan">
            </div>
            <div class="form-group">
                <label>Nilai Jaminan</label>
                <input type="Number" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control" name="nilai_jaminan" placeholder="Nilai Jaminan">
            </div>
            <div class="form-group">
                <label>Principal</label>
                <select class="form-control" name="principal">
                    <option value="1">PT. Fiber Home Technologies Indonesia</option>
                    <option value="2">PT. Fiber Home Technologies Indonesia</option>
                    <option value="3">PT. Fiber Home Technologies Indonesia</option>
                </select>
            </div>
            <div class="form-group">
                <label>Oblige</label>
                <select class="form-control" name="oblige">
                    <option value="1">PT. Telkom Akses C.O. Unit Finance</option>
                    <option value="2">PT. Telkom Akses C.O. Unit Finance</option>
                    <option value="3">PT. Telkom Akses C.O. Unit Finance</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pekerja</label>
                <textarea class="form-control" rows="3" name="pekerja" placeholder="Pekerja"></textarea>
            </div>
            <div class="form-group">
                <label>Nomor Kontrak</label>
                <textarea class="form-control" rows="3" name="nomor_kontrak" placeholder="Nomor Kontrak"></textarea>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Dari Tanggal:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" name="dari_tanggal" data-target="#reservationdate" />
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Sampai Tanggal:</label>
                        <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" name="sampai_tanggal" data-target="#reservationdate" />
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            <a href="#" class="btn btn-primary">Submit</a>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>
<!-- <script src="/adminlte/plugins/jquery/jquery.min.js"></script> -->
<script src="/adminlte/plugins/moment/moment.min.js"></script>
<script src="/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>


<script>
    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
</script>
<?= $this->endSection(); ?>