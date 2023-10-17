<?php
$db = \Config\Database::connect();
$jaminan = $db->query('SELECT id, jenis FROM jaminan_jenis WHERE actives = 1')->getResultArray();
$currency = $db->query('SELECT id, codename AS code FROM currency ORDER BY codename ASC')->getResultArray();
?>
<div class="row px-md-2 px-lg-3 px-xl-5">
    <div class="col-md">
        <div class="form-group mw-3">
            <label for="jaminan_tipe">Jenis Jaminan</label>
            <select name="jaminan_tipe" id="jaminan_tipe" class="form-control">
                <option selected disabled>---</option>
                <?php foreach ($jaminan as $jm) : ?>
                    <option value="<?= $jm['id']; ?>"><?= $jm['jenis']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Pencairan Klaim</label>
            <div class="pt-2">
                <div class="icheck-primary d-inline pr-4">
                    <input type="radio" id="conditional_1" name="conditional" value="1">
                    <label for="conditional_1">CONDITIONAL</label>
                </div>
                <div class="icheck-primary d-inline">
                    <input type="radio" id="conditional_0" name="conditional" value="0">
                    <label for="conditional_0">UNCONDITIONAL</label>
                </div>
            </div>
        </div>
        <div class="form-group mw-3 pt-2">
            <label for="nilai">Nilai Jaminan<span id="auto_button" class="btn btn-default btn-sm py-0 ml-2 text-bold mb-1">auto</span></label>
            <div class="input-group">
                <select id="currency_jaminan" class="form-control mw-1" disabled>
                    <?php foreach ($currency as $cr) : ?>
                        <option <?= $cr['code'] == 'IDR' ? 'selected ' : ''; ?>value="<?= $cr['id']; ?>"><?= $cr['code']; ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="text" name="nilai" id="nilai" class="form-control" data-inputmask="'alias':'numeric','groupSeparator':'.','radixPoint':','" data-mask>
            </div>
        </div>
        <div class="form-group mw-3">
            <label for="bahasa">Penggunaan Bahasa</label>
            <select name="bahasa" id="bahasa" class="form-control">
                <option value="ID">Indonesia</option>
            </select>
        </div>
    </div>
    <div class="col-md-1">
        <div class="h-100 mx-auto bg-light" style="width:2px"></div>
    </div>
    <div class="col-md">
        <p class="mb-1"><small class="text-secondary ml-2">Jangka Waktu</small></p>
        <div class="border-fade px-3 pt-3 mb-2">
            <div class="form-group row mb-2 mb-xl-3">
                <label class="col-xl-4 col-form-label text-xl-right text-nowrap">Dari Tanggal</label>
                <div class="col-xl-8 inputdate" id="date_from"></div>
            </div>
            <div class="form-group row mb-2 mb-xl-3">
                <label class="col-xl-4 col-form-label text-xl-right text-nowrap">Sampai Tanggal</label>
                <div class="col-xl-8 inputdate" id="date_to"></div>
            </div>
            <div class="form-group row">
                <label for="days" class="col-xl-4 col-form-label text-xl-right">Selama</label>
                <div class="input-group col-xl-8 mw-2">
                    <input type="text" name="days" id="days" class="form-control" data-inputmask="'alias':'numeric'" data-mask>
                    <div class="input-group-append">
                        <span class="input-group-text text-bold">Hari</span>
                    </div>
                </div>
            </div>
        </div>
        <p class="mb-1"><small class="text-secondary ml-2">Penerbitan Jaminan</small></p>
        <div class="border-fade px-3 pt-3">
            <div class="form-group row mb-2 mb-xl-3">
                <label for="issued_place" class="col-xl-4 col-form-label text-xl-right text-nowrap">Tempat Terbit</label>
                <div class="input-group col-xl-8 mw-2">
                    <input type="text" name="issued_place" id="issued_place" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-4 col-form-label text-xl-right text-nowrap">Tanggal Terbit</label>
                <div class="col-xl-8 inputdate" id="issued_date"></div>
            </div>
        </div>
    </div>
</div>