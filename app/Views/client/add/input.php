<?php
$validatError = \Config\Services::validation()->getErrors();
$modelJaminan = new \App\Models\JaminanModel;
$modelAsuransi = new \App\Models\InsuranceModel;
$marketingModel = new \App\Models\MarketingModel;
$asuransi = $modelAsuransi->getData(['id', 'nickname'])->where(['active' => 1])->order('nickname')->data();
$jaminanTipe = $modelJaminan->getTipe(['id', 'jenis'])->data();
?>
<div class="row">
    <div class="col-md">
        <div class="form-group">
            <label for="marketing">Pembawa Bisnis <small class="text-secondary">(Marketing)</small></label>
            <select name="marketing" id="marketing" class="form-control">
                <?php foreach ($marketingModel->getData()->data() as $mkt) : ?>
                    <option <?= $mkt['id'] == '230201125148' ? 'selected ' : ''; ?>value="<?= $mkt['id']; ?>"><?= $mkt['nama']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
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
            <button type="button" id="openrate" class="btn btn-default btn-sm mt-4" data-open="0">
                <i class="fas fa-folder-open mr-2"></i>Buka Input Rate Principal
            </button>
        </div>
    </div>
</div>
<?php $maxWidth = 200 + (130 * sizeof($asuransi)); ?>
<div id="inputrate" class="pt-4 mx-auto hide-content" style="max-width:<?= $maxWidth; ?>px;overflow-y:auto">
    <table class="table table-borderless">
        <tr>
            <td class="p-0"></td>
            <?php foreach ($asuransi as $ar) : ?>
                <td class="p-2 text-center text-bold"><?= $ar['nickname']; ?></td>
            <?php endforeach; ?>
        </tr>
        <?php foreach ($jaminanTipe as $jt) : ?>
            <tr>
                <td class="align-middle text-bold text-nowrap"><?= $jt['jenis']; ?></td>
                <?php foreach ($asuransi as $as) : ?>
                    <td class="p-2">
                        <div class="input-group" style="min-width:100px">
                            <input name="rates[AS<?= $as['id']; ?>][JT<?= $jt['id']; ?>]" type="text" class="form-control" data-inputmask="'alias':'numeric','groupSeparator':'.','radixPoint':','" data-mask>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-percentage"></i></span>
                            </div>
                        </div>
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
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
        $("[data-mask]").inputmask();
        <?php foreach (array_keys($validatError) as $err) : ?>
            $('#<?= $err; ?>').addClass('is-invalid').on('keyup input', function() {
                $(this).removeClass('is-invalid').parent().children('small').fadeOut();
            });
        <?php endforeach; ?>
        $('#openrate').click(function() {
            const OPEN = parseInt($(this).data('open'));
            if (OPEN === 1) {
                $('#inputrate').slideUp();
                $(this).data('open', 0).html('<i class="fas fa-folder-open mr-2"></i>Buka Input Rate Principal');
            } else {
                $('#inputrate').slideDown();
                $(this).data('open', 1).html('<i class="fas fa-times mr-2"></i>Tutup Input Rate');
            }
        });
    });
</script>
<?= $this->endSection(); ?>