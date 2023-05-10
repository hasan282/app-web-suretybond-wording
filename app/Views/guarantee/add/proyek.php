<?php
$db = \Config\Database::connect();
$proyek = $db->table('jaminan_proyek')->get()->getResultArray();
$pekerjaan = $db->table('jaminan_pekerjaan')->get()->getResultArray();
$currency = $db->query('SELECT id, symbol_1 AS curr FROM currency ORDER BY symbol_1 ASC')->getResultArray();
?>
<div class="row px-md-2 px-lg-3 px-xl-5">
    <div class="col-md">
        <div class="mx-auto mw-5">
            <div class="form-group">
                <label for="obligee">Pemilik Proyek (Obligee)</label>
                <textarea id="obligee" name="obligee" rows="2" class="form-control" placeholder="Obligee"></textarea>
            </div>
            <div class="form-group">
                <label for="obligee_alamat">Alamat Obligee</label>
                <textarea id="obligee_alamat" name="obligee_alamat" rows="3" class="form-control" placeholder="Alamat"></textarea>
            </div>
            <div class="form-group mw-3">
                <label for="proyek">Jenis Proyek</label>
                <select name="proyek" id="proyek" class="form-control">
                    <option selected disabled>---</option>
                    <?php foreach ($proyek as $pro) : ?>
                        <option value="<?= $pro['id']; ?>"><?= $pro['proyek']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="proyek_nama">Nama Proyek</label>
                <textarea id="proyek_nama" name="proyek_nama" rows="2" class="form-control" placeholder="Proyek"></textarea>
            </div>
            <div class="form-group mw-3">
                <label for="pekerjaan">Kelompok Pekerjaan</label>
                <select name="pekerjaan" id="pekerjaan" class="form-control">
                    <option selected disabled>---</option>
                    <?php foreach ($pekerjaan as $pkr) : ?>
                        <option value="<?= $pkr['id']; ?>"><?= $pkr['pekerjaan']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-1">
        <div class="h-100 mx-auto bg-light" style="width:2px"></div>
    </div>
    <div class="col-md">
        <div class="mx-auto mw-5">
            <div class="form-group">
                <label for="proyek_alamat">Lokasi Proyek</label>
                <textarea id="proyek_alamat" name="proyek_alamat" rows="2" class="form-control" placeholder="Lokasi"></textarea>
            </div>
            <div class="form-group mw-3">
                <label for="nilai_proyek">Nilai Kontrak</label>
                <div class="input-group">
                    <select name="currency_proyek" id="currency_proyek" class="form-control mw-1">
                        <?php foreach ($currency as $cr) : ?>
                            <option value="<?= $cr['id']; ?>"><?= $cr['curr']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="text" name="nilai_proyek" id="nilai_proyek" class="form-control" data-inputmask="'alias':'numeric','groupSeparator':'.','radixPoint':','" data-mask>
                </div>
            </div>
            <div class="form-group">
                <label for="dokumen">Dokumen Pendukung</label>
                <textarea id="dokumen" name="dokumen" rows="5" class="form-control" placeholder="Dokumen"></textarea>
                <div class="input-group date mw-3 mt-3" id="dokumen_date" data-target-input="nearest">
                    <div class="input-group-prepend" data-target="#dokumen_date" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                    </div>
                    <input type="hidden" id="val_dokumen_date" name="dokumen_date">
                    <input type="text" class="form-control datetimepicker-input" id="dokumen_date_input" data-target="#dokumen_date" placeholder="Tanggal">
                </div>
            </div>
        </div>
    </div>
</div>