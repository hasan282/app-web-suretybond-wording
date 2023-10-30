<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>


<div class="content">
    <div class="card">
        <div class="card-header">
            <b>Profile</b>
            <a href="<?= base_url('/user/edit_profile_image'); ?>"><i class="fas fa-edit fa-fw mr-1"></i>Change Photo Profile</a>
        </div>
        <div class="card-body">
            <img src="/image/user/USER000M.jpg" alt="" height="80" width="80">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <b>Profile Settings</b>
            <a href="<?= base_url('/user/edit_profile'); ?>"><i class="fas fa-edit fa-fw mr-1"></i>Edit Profile</a>
        </div>
        <div class="card-body">
            Name: <span class="text-gray"><?= userdata('nama'); ?></span>
            <br>
            Username: <span class="text-gray"><?= userdata('user'); ?></span>
            <br>
            Kantor: <span class="text-gray"><?= userdata('office'); ?></span>
            <br>
            Jabatan: <span class="text-gray"><?= userdata('role'); ?></span>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <b>Security & Password</b>
            <a href="<?= base_url('/user/change_pass'); ?>"><i class="fas fa-edit fa-fw mr-1"></i>Edit Password</a>
        </div>
        <div class="card-body">
            Your Password: <span class="text-gray">******</span>
            <br>
            Last Changed: <span class="text-gray">22-08-2020</span>
        </div>
    </div>

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


<?= $this->endSection(); ?>