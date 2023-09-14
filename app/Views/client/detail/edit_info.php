<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="mw-6">
    <form method="POST">
        <?= csrf_field(); ?>
        <div class="card">
            <div class="card-header">
                <a href="/client/detail/<?= $principal['enkrip']; ?>" class="btn btn-sm btn-default">
                    <i class="fas fa-arrow-left mr-2"></i>Batalkan Edit Informasi
                </a>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="principal">Nama Perusahaan</label>
                    <input id="principal" class="form-control" value="<?= $principal['principal']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat <span class="text-danger">*</span></label>
                    <textarea id="alamat" name="alamat" rows="3" class="form-control" placeholder="Alamat"><?= $principal['alamat']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="telpon">Nomor Telpon</label>
                    <input id="telpon" name="telpon" class="form-control" value="<?= $principal['telpon']; ?>" placeholder="Telpon">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" class="form-control" value="<?= $principal['email']; ?>" placeholder="Email">
                </div>
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-primary text-bold" type="submit" id="submitedit">
                    <i class="fas fa-save mr-2"></i>Simpan Perubahan
                </button>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>
<script>
    $(function() {
        $('#alamat').on('keyup', function() {
            const EMPTY = $(this).val().trim() == '';
            $('#submitedit').attr('disabled', EMPTY);
        });
    });
</script>
<?= $this->endSection(); ?>