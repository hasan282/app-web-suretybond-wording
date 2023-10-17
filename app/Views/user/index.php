<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>
<?php $userName = userdata('nama'); ?>


<div class="row">
    <div class="col-3">
        <img src="image/user/USER000M.jpg" class="img img-thumbnail" />
    </div>
    <div class="col-7">
        <form action="<?= base_url('user/save') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <?= csrf_field();
            ?>
            <input type="hidden" name="id_user" value="">
            <div class="form-group row">
                <label class="col-3">Nama Pengguna :</label>
                <div class="col-9">
                    <input type="text" name="nama" class="form-control" placeholder="Nama user" value="" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-3">Email :</label>
                <div class="col-9">
                    <input type="email" name="email" class="form-control" placeholder="Email" value="" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-3">Username :</label>
                <div class="col-9">
                    <input type="text" name="username" class="form-control" placeholder="Username" value="<?= $userName ?>" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-3">Password :</label>
                <div class="col-9">
                    <input type="password" name="password" class="form-control" placeholder="Password" value="">
                    <small class="text-danger">Minimal 6 karakter dan maksimal 32 karakter atau biarkan kosong</small>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-3">Upload Foto profil :</label>
                <div class="col-7">
                    <input type="file" name="gambar" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-3"></label>
                <div class="col-9">
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </div>

            <?= form_close(); ?>
    </div>
</div>



<?= $this->endSection(); ?>