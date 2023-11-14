<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="modal fade bd-example-modal-lg" id="changepass" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-bold" id="label"> Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo @$error; ?>
                <form method="POST" action="#">
                    <div class="form-group">
                        <label for="old_pass">Old Password:</label>
                        <div class="input-group">
                            <input type="password" name="old_pass" class="form-control" placeholder="Old Password" required />
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-eye-slash toggle-password" data-target="old_pass"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="new_pass">New Password:</label>
                        <div class="input-group">
                            <input type="password" name="newPass" class="form-control" placeholder="New Password" required />
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-eye-slash toggle-password" data-target="newPass"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm_pass">Confirm Password:</label>
                        <div class="input-group">
                            <input type="password" name="confirmPass" class="form-control" placeholder="Confirm Password" required />
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-eye-slash toggle-password" data-target="confirmPass"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-bold" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary text-bold"> <i class="fas fa-save mr-2"></i>Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.toggle-password').forEach(function(eye) {
        eye.addEventListener('click', function() {
            const inputField = document.querySelector('[name="' + this.getAttribute('data-target') + '"]');
            if (inputField.type === "password") {
                inputField.type = "text";
                this.classList.remove("fa-eye-slash");
                this.classList.add("fa-eye");
            } else {
                inputField.type = "password";
                this.classList.remove("fa-eye");
                this.classList.add("fa-eye-slash");
            }
        });
    });
</script>

<?= $this->endSection(); ?>