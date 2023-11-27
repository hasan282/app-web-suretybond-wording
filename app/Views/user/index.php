<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body box-profile">
                <div class="text-center mw-2 mx-auto">
                    <img class="profile-user-img img-fluid img-circle w-100" src="<?= userdata('foto'); ?>" alt="">
                </div>
                <h3 class="profile-username text-center mt-3 mb-0"><?= userdata('nama'); ?></h3>
                <p class="text-muted text-center"><?= userdata('user'); ?></p>
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item text-center">
                        <span class="text-bold"><?= userdata('office'); ?></span>
                    </li>
                    <li class="list-group-item text-center">
                        <span class="text-secondary"><?= userdata('role'); ?></span>
                    </li>
                </ul>
                <a href="/setting" class="btn btn-primary btn-block">
                    <i class="fas fa-cog mr-2"></i>Pengaturan Akun
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <strong>About Me</strong>
            </div>
            <div class="card-body">
                <p><strong>Nama:</strong></p>
                <p><?= userdata('nama'); ?></p>

                <!-- Informasi tambahan -->
                <div class="profile-info mt-4">
                    <p><strong>Email:</strong></p>
                    <p>risky@gmail.com</p>
                </div>

                <!-- Deskripsi atau bio -->
                <div class="profile-bio mt-4">
                    <p><strong>Deskripsi:</strong></p>

                </div>
            </div>
        </div>
    </div>


</div>

<?= $this->endSection(); ?>