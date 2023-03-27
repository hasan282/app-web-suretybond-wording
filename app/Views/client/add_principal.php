<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Tambah Data Principal</h3>
    </div>
    <div class="card-body">
        <form method="POST">
            <div class="form-group">
                <label>Nama Perusahaan</label>
                <input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan" required>
            </div>
            <div class="form-group">
                <label>No Telp/Fax/Email</label>
                <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control" name="contact" placeholder="No Telp/Fax/Email" required>
            </div>
            <div class="form-group">
                <label>Bidang Usaha</label>
                <input type="text" class="form-control" name="bidang_usaha" placeholder="Bidang Usaha" required>
            </div>
            <div class="form-group">
                <label>Pejabat Yang berurusan</label>
                <input type="text" class="form-control" name="pejabat" placeholder="Pejabat Yang berurusan" required>
            </div>
            <div class="form-group">
                <label>Jabatan</label>
                <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <!-- <a href="#" class="btn btn-primary">Submit</a> -->
        </form>
    </div>
</div>

<?= $this->endSection(); ?>