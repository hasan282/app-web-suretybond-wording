<?php
$db = \Config\Database::connect();
$proyek = $db->table('jaminan_proyek')->get()->getResultArray();
$pekerjaan = $db->table('jaminan_pekerjaan')->get()->getResultArray();
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
                <label for="">Lokasi Proyek</label>
                <textarea id="" name="" rows="2" class="form-control" placeholder="Lokasi"></textarea>
            </div>

            <div class="form-group mw-3">
                <label>Nilai Kontrak</label>
                <div class="input-group">
                    <select name="currency" id="currency" class="form-control mw-1">
                        <option value="3">EUR</option>
                        <option selected value="1">IDR</option>
                        <option value="2">USD</option>
                    </select>
                    <input type="text" name="nilai" id="nilai" class="form-control" data-inputmask="'alias':'numeric','groupSeparator':'.','radixPoint':','" data-mask>
                </div>
            </div>

            <div class="form-group">
                <label for="">Dokumen Pendukung</label>
                <textarea id="" name="" rows="5" class="form-control" placeholder="Dokumen"></textarea>
            </div>

        </div>
    </div>
</div>