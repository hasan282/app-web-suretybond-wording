<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<!-- <style>
    .back {
        background-image: url('https://wallpapers.com/images/high/profile-picture-background-jr494nw63vo4nz7g.webp');
    }
</style> -->

<div class="container">
    <div class="row">
        <div class="col-md-3 mx-auto">
            <div class="back card card-primary card-outline">
                <div class="card-body text-center">
                    <img src="<?= userdata('foto') ?>" class="img img-thumbnail rounded-circle" style="width: 180px;" />
                    <h4 class="mt-3"><?= userdata('nama') ?></h4>
                    <a href="/setting" class="btn btn-primary btn-block text-bold"><i class="fas fa-cog mr-2"></i>Setting</a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><i class="fas fa-user fa-fw mr-2"></i>Nama Pengguna</p>
                            <p class="text-bold"><?= userdata('nama'); ?></p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="fas fa-user-edit fa-fw mr-2"></i>Username</p>
                            <p class="text-bold"><?= userdata('user'); ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <p><i class="fas fa-laptop-house fa-fw mr-2"></i>Nama Kantor Agen</p>
                            <p class="text-bold"><?= userdata('office'); ?></p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="fas fa-briefcase fa-fw mr-2"></i>Jabatan</p>
                            <p class="text-bold"><?= userdata('role'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>