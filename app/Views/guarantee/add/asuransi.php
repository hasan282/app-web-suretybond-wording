<?php
$model = new \App\Models\InsuranceModel;
$asuransi = $model->getData(['enkrip', 'asuransi'])->where(['active' => 1])->order('asuransi')->data();
?>
<div class="form-group">
    <label for="asuransi">Asuransi Penjamin</label>
    <select id="asuransi" class="form-control">
        <option selected disabled>---</option>
        <?php foreach ($asuransi as $as) : ?>
            <option value="<?= $as['enkrip']; ?>"><?= $as['asuransi']; ?></option>
        <?php endforeach; ?>
    </select>
    <select id="cabang" class="form-control mt-2 mw-3" disabled></select>
</div>
<div class="form-group">
    <label for="asuransi_alamat">Alamat Asuransi</label>
    <textarea id="asuransi_alamat" rows="2" class="form-control" readonly></textarea>
</div>
<div class="form-group">
    <label for="principal_pejabat">Pejabat Penandatangan</label>
    <select name="principal_pejabat" id="principal_pejabat" class="form-control" disabled></select>
    <input id="principal_jabatan" class="form-control mw-3 mt-2" value="" readonly>
</div>