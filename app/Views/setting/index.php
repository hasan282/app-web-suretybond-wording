<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="content">
    <!-- Profile Card -->
    <div class="card">
        <div class="card-header">
            <b>Profile Image</b><i class="fas fa-light fa-camera ml-1"></i>
            <button type="button" class="btn btn-primary text-bold" data-toggle="modal" data-target="#photo" style="margin-left: 760px;">
                <i class=" fas fa-edit edit-icon"></i>Edit Foto Profile
            </button>
        </div>
        <div class="card-body">
            <img src="<?= userdata('foto') ?>" alt="" class="profile-image" height="80" width="80">
        </div>
    </div>

    <!-- Profile Settings Card -->
    <div class="card">
        <div class="card-header">
            <b>Profile Settings</b><i class="fas fa-light fa-user ml-1"></i>
            <button type="button" class="btn btn-primary text-bold" data-toggle="modal" data-target="#profile" style="margin-left: 780px;">
                <i class=" fas fa-edit edit-icon"></i>Edit Profile
            </button>
        </div>
        <div class="card-body">
            Name: <span class="text-gray"><?= userdata('nama'); ?></span><br>
            Username: <span class="text-gray"><?= userdata('user'); ?></span><br>
            Kantor: <span class="text-gray"><?= userdata('office'); ?></span><br>
            Jabatan: <span class="text-gray"><?= userdata('role'); ?></span>
        </div>
    </div>

    <!-- Security & Password Card -->
    <div class="card">
        <div class="card-header">
            <b>Security & Password</b><i class="fas fa-light fa-lock ml-1"></i>
            <button type="button" class="btn btn-primary text-bold" data-toggle="modal" data-target="#changepass" style="margin-left: 730px;">
                <i class=" fas fa-edit edit-icon"></i>Edit Password
            </button>
        </div>
        <div class="card-body">
            Last Changed: <span class="text-gray">22-08-2020</span>
        </div>
    </div>
</div>


<?php $this->include('user/editProfile'); ?>
<?php $this->include('user/editImage'); ?>
<?php $this->include('user/changePass'); ?>


</body>

<?= $this->endSection(); ?>