<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>


<div class="content">

    <!-- Profile Card -->
    <div class="container mt-2">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <button class="btn btn-secondary" data-toggle="collapse" data-target="#collapseProfile">
                        <i class="fas fa-light fa-camera ml-1" style="margin-right: 10px;"></i>
                        <span>Profile Image</span>
                    </button>
                </h5>
            </div>

            <div id="collapseProfile" class="collapse">
                <div class="card-body">
                    <img src="<?= userdata('foto') ?>" alt="" class="profile-image" height="80" width="80">
                    <button type="button" class="btn btn-primary text-bold" data-toggle="modal" data-target="#photo" style="margin-left: 83%;">
                        <i class="fas fa-edit edit-icon"></i>Edit Photo Profile
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Settings Card -->
    <div class="container mt-2">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <button class="btn btn-secondary" data-toggle="collapse" data-target="#collapseProfileSettings">
                        <i class="fas fa-light fa-user ml-1" style="margin-right: 10px;"></i>
                        <span>Profile Setting</span>
                    </button>
                </h5>
            </div>

            <div id="collapseProfileSettings" class="collapse">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <strong>Name</strong>
                        </div>
                        <div class="col-md-9">
                            <span class="text-gray">: <?= userdata('nama'); ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <strong>Username</strong>
                        </div>
                        <div class="col-md-9">
                            <span class="text-gray">: <?= userdata('user'); ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <strong>Kantor</strong>
                        </div>
                        <div class="col-md-9">
                            <span class="text-gray">: <?= userdata('office'); ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <strong>Jabatan</strong>
                        </div>
                        <div class="col-md-9">
                            <span class="text-gray">: <?= userdata('role'); ?></span>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary text-bold" data-toggle="modal" data-target="#profile" style="margin-left: 900px;">
                        <i class="fas fa-edit edit-icon"></i>Edit Profile
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Security & Password Card -->
    <div class="container mt-2">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <button class="btn btn-secondary" data-toggle="collapse" data-target="#collapseSecurity">
                        <i class="fas fa-light fa-lock ml-1" style="margin-right: 10px;"></i>
                        <span>Security & Password</span>
                    </button>
                </h5>
            </div>

            <div id="collapseSecurity" class="collapse">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <strong>Last Changed</strong>
                        </div>
                        <div class="col-md-9">
                            <span class="text-gray">: 22-08-2020</span>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary text-bold" data-toggle="modal" data-target="#changepass" style="margin-left: 878px;">
                        <i class="fas fa-edit edit-icon"></i>Edit Password
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->include('user/editProfile'); ?>
<?php $this->include('user/editImage'); ?>
<?php $this->include('user/changePass'); ?>


</div>
</main>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        iconColor: 'black',
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'error',
        title: 'Ooops. Sedang Dalam Perbaikan',
    })
</script>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?= $this->endSection(); ?>