<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="modal fade" id="changepass" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
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
                        <input type="password" name="old_pass" class="form-control" placeholder="Old Password" required />
                    </div>

                    <div class="form-group">
                        <label for="new_pass">New Password:</label>
                        <input type="password" name="newPass" class="form-control" placeholder="New Password" required />
                    </div>

                    <div class="form-group">
                        <label for="confirm_pass">Confirm Password:</label>
                        <input type="password" name="confirmPass" class="form-control" placeholder="Confirm Password" required />
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
<?= $this->endSection(); ?>