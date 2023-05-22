<?php
$validatError = \Config\Services::validation()->getErrors();
?>
<div class="row">
    <div class="col-md">
        <div class="form-group">
            <label for="principal">Nama Perusahaan <span class="text-danger">*</span></label>
            <input id="principal" name="principal" class="form-control" value="<?= set_value('principal'); ?>" placeholder="Perusahaan">
            <?php if (array_key_exists('principal', $validatError)) : ?>
                <small class="text-danger ml-2"><?= str_replace('The ', '', $validatError['principal']); ?></small>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat <span class="text-danger">*</span></label>
            <textarea id="alamat" name="alamat" rows="2" class="form-control" placeholder="Alamat"><?= set_value('alamat'); ?></textarea>
            <?php if (array_key_exists('alamat', $validatError)) : ?>
                <small class="text-danger ml-2"><?= str_replace('The ', '', $validatError['alamat']); ?></small>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="telpon">Nomor Telpon</label>
            <input id="telpon" name="telpon" class="form-control" value="<?= set_value('telpon'); ?>" placeholder="Telpon">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" name="email" class="form-control" value="<?= set_value('email'); ?>" placeholder="Email">
        </div>
    </div>
    <div class="col-md position-relative" style="min-height:310px">
        <label><small class="ml-2 text-secondary">Pejabat Penandatangan</small></label>
        <div class="border-fade px-3 pt-2">
            <div class="form-group">
                <label for="pejabat">Nama Lengkap <span class="text-danger">*</span></label>
                <input id="pejabat" name="pejabat" class="form-control" value="<?= set_value('pejabat'); ?>" placeholder="Nama">
                <?php if (array_key_exists('pejabat', $validatError)) : ?>
                    <small class="text-danger ml-2"><?= str_replace('The ', '', $validatError['pejabat']); ?></small>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan <span class="text-danger">*</span></label>
                <input id="jabatan" name="jabatan" class="form-control" value="<?= set_value('jabatan'); ?>" placeholder="Jabatan">
                <?php if (array_key_exists('jabatan', $validatError)) : ?>
                    <small class="text-danger ml-2"><?= str_replace('The ', '', $validatError['jabatan']); ?></small>
                <?php endif; ?>
            </div>
        </div>
        <div class="text-right px-3 pt-2">
            <small class="text-danger"><i>* kolom yang harus diisi</i></small><br>
        </div>
        <div class="absolute-bottom py-3 px-3 text-md-right text-center w-100">
            <button type="button" class="btn btn-default btn-sm mt-4">
                <i class="fas fa-folder-open mr-2"></i><span>Buka Input Rate Principal</span>
            </button>
        </div>
    </div>
</div>
<div class="pt-4 hide-content">
    <!-- <div class="pt-4"> -->




    <div class="row">
        <div class="col">


            <div class="border-fade pt-3 px-3">




                <div class="form-group">
                    <label for="spacing">Spacing</label>
                    <div class="input-group">
                        <input type="text" id="spacing" class="form-control" data-inputmask="'alias':'numeric','groupSeparator':'.','radixPoint':','" data-mask>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-percentage"></i></span>
                        </div>
                    </div>
                </div>


            </div>


        </div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
    </div>



</div>
<div class="text-center pt-3">
    <div class="icheck-primary text-secondary">
        <input type="checkbox" name="continues" id="continues">
        <label class="text-sm" for="continues">Lanjutkan ke Input Jaminan</label>
    </div>
</div>

<?= $this->section('jscript'); ?>
<script>
    $(function() {
        <?php foreach (array_keys($validatError) as $err) : ?>
            $('#<?= $err; ?>').addClass('is-invalid').on('keyup input', function() {
                $(this).removeClass('is-invalid').parent().children('small').fadeOut();
            });
        <?php endforeach; ?>
    });
</script>
<?= $this->endSection(); ?>