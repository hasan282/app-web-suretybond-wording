<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>
<?php $userName = userdata('nama'); ?>

<div class="content">
    <div class="card">
        <div class="card-header">
            <b>Avatar</b>
            <div style="display: flex; gap: 1em">
                <a href="" class="txt-red">Remove Avatar</a>
                <a href="">Change Avatar</a>
            </div>
        </div>
        <div class="card-body">
            <img src="/image/user/USER000M.jpg" alt="" height="80" width="80">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <b>Profile Settings</b>
            <a href="">Edit Profile</a>
        </div>
        <div class="card-body">
            Name: <?= $userName ?> <span class="text-gray"></span>
            <br>
            Email: <span class="text-gray"></span>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <b>Security & Password</b>
            <a href="">Edit Password</a>
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