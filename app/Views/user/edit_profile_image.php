<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile text-center">
                    <img src="/image/user/USER000M.jpg" class="img img-thumbnail" style="max-width: 100%; height: auto;" />
                    <a href="/setting" class="btn btn-primary btn-block text-bold mt-3"><i class="fas fa-cog mr-2"></i>Setting</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-8 col-lg-9 mb-3">
            <form action="<?= base_url('user/save') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_user" value="">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <i class="fas fa-user fa-fw mr-2"></i>Nama Pengguna: <?= userdata('nama'); ?>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-user-edit fa-fw mr-2"></i>Username: <?= userdata('user') ?>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-briefcase fa-fw mr-2"></i>Jabatan: <?= userdata('role') ?>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-building fa-fw mr-2"></i>Kantor: <?= userdata('office') ?>
                            </li>
                        </ul>
                        <div class="form-group mt-3">
                            <label>Ganti Foto profil :</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>