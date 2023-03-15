<?= $this->extend('template/page_login'); ?>

<?= $this->section('login_box'); ?>

<a href="/" class="link-transparent">
    <div class="mx-auto mb-2" style="max-width:300px">
        <img class="img-fluid" src="/image/icon/jis_suretybond.png" alt="">
    </div>
</a>
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Login sebagai User</p>
        <form method="POST">
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
                <!-- <button type="submit" class="btn btn-primary btn-block text-bold">
                    <i class="fas fa-sign-in-alt mr-2"></i>Login
                </button> -->
                <a href="/dashboard" class="btn btn-primary btn-block text-bold">
                    <i class="fas fa-sign-in-alt mr-2"></i>Login
                </a>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>