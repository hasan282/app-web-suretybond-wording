<?= $this->extend('template/page_login'); ?>

<?= $this->section('login_box'); ?>

<?php
$session = session();
$loginFail = ($session->getFlashdata('login_status') == 'failed');
$userName = $session->getFlashdata('username');
$invalidInput = $session->getFlashdata('is_invalid');
$dark = get_cookie('DRKMOD') ?? '0';
$darkmode = (intval($dark) === 1);
?>
<a href="/" class="link-transparent">
    <div class="mx-auto mb-3" style="max-width:360px">
        <img class="img-fluid surety-logo" src="/image/icon/suretybond<?= $darkmode ? '_dark' : ''; ?>.png" alt="">
    </div>
</a>
<div class="card">
    <div class="card-body login-card-body">
        <?php if ($loginFail) : ?>
            <p class="login-box-msg text-danger">
                <?php $failedMessage = $session->getFlashdata('fail_message') ?? 'Data User Tidak Sesuai'; ?>
                <i class="fas fa-exclamation-triangle mr-2"></i><?= $failedMessage; ?>
            </p>
        <?php else : ?>
            <p class="login-box-msg">Login sebagai User</p>
        <?php endif; ?>
        <form method="POST">
            <?= csrf_field(); ?>
            <input type="hidden" name="requested_url" value="<?= $session->getFlashdata('requested_url'); ?>">
            <div class="input-group mb-3">
                <input type="text" name="in_user" id="in_user" class="form-control<?= ($invalidInput == 'user') ? ' is-invalid' : ''; ?>" placeholder="Username" value="<?= $userName; ?>">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-fw fa-user"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="in_pass" id="in_pass" class="form-control<?= ($invalidInput == 'password') ? ' is-invalid' : ''; ?>" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text cursor-pointer showpass" data-target="in_pass" data-show="0">
                        <span class="fas fa-fw fa-eye"></span>
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
    let messageChange = 0;
    $(function() {
        $('input.form-control').on('keyup', function() {
            <?php if ($loginFail) : ?>
                if (messageChange === 0) {
                    $('.login-box-msg').removeClass('text-danger').html('Login sebagai User');
                    messageChange = 1;
                }
            <?php endif; ?>
            $(this).removeClass('is-invalid');
            $('button[type="submit"]').attr('disabled', ($('#in_user').val() == '' || $('#in_pass').val() == ''));
        });
        $('.showpass').on('click', function() {
            const ICON = 'fas fa-fw fa-eye';
            const SHOW = parseInt($(this).data('show')) === 1;
            const TARGET = $('#' + $(this).data('target'));
            TARGET.attr('type', SHOW ? 'password' : 'text');
            $(this).children('span').attr('class', SHOW ? ICON : ICON + '-slash');
            $(this).data('show', SHOW ? '0' : '1');
        });
    });
</script>
<?= $this->endSection(); ?>