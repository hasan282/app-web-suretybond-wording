<?= $this->extend('template/page_login'); ?>

<?= $this->section('login_box'); ?>

<?php
$loginFail = (session()->getFlashdata('login_status') == 'failed');
$dark = get_cookie('DRKMOD') ?? '0';
$darkmode = (intval($dark) === 1);
?>
<a href="/" class="link-transparent">
    <div class="mx-auto mb-2" style="max-width:300px">
        <img class="img-fluid surety-logo" src="/image/icon/jis_suretybond<?= $darkmode ? '_dark' : ''; ?>.png" alt="">
    </div>
</a>
<div class="card">
    <div class="card-body login-card-body">
        <?php if ($loginFail) : ?>
            <p class="login-box-msg text-danger">
                <i class="fas fa-exclamation-triangle mr-2"></i>Data User Tidak Sesuai
            </p>
        <?php else : ?>
            <p class="login-box-msg">Login sebagai User</p>
        <?php endif; ?>
        <form method="POST">
            <?= csrf_field(); ?>
            <div class="input-group mb-3">
                <input type="text" name="in_user" id="in_user" class="form-control" placeholder="Username">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="in_pass" id="in_pass" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text" data-target="in_pass" data-show="0">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary btn-block text-bold" disabled>
                    <i class="fas fa-sign-in-alt mr-2"></i>Login
                </button>
            </div>
        </form>
    </div>
</div>
<div class="text-center mt-3">
    <div class="custom-control custom-switch">
        <input <?= $darkmode ? 'checked ' : ''; ?>type="checkbox" class="custom-control-input cursor-pointer" id="darkswitch">
        <label class="custom-control-label text-secondary cursor-pointer" for="darkswitch"><i class="fas fa-moon"></i></label>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>
<script>
    $(function() {
        <?php if ($loginFail) : ?>
            setTimeout(() => {
                $('.login-box-msg').removeClass('text-danger').html('Login sebagai User');
            }, 5000);
        <?php endif; ?>
        $('input.form-control').on('keyup', function() {
            $('button[type="submit"]').attr('disabled', ($('#in_user').val() == '' || $('#in_pass').val() == ''));
        });
    });
</script>
<?= $this->endSection(); ?>