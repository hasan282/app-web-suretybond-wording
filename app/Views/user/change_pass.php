<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    Change Password
                </div>
                <div class="card-body">
                    <?php echo @$error; ?>
                    <form method="post" action="user/edit">
                        <div class="form-group">
                            <label for="old_pass">Old Password:</label>
                            <input type="password" name="old_pass" class="form-control" placeholder="Old Password" />
                        </div>

                        <div class="form-group">
                            <label for="new_pass">New Password:</label>
                            <input type="password" name="new_pass" class="form-control" placeholder="New Password" />
                        </div>

                        <div class="form-group">
                            <label for="confirm_pass">Confirm Password:</label>
                            <input type="password" name="confirm_pass" id="confirm_pass" class="form-control" placeholder="Confirm Password" />
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" name="change_password" id="change_password_btn">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>