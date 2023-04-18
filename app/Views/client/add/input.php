<div class="row">
    <div class="col-md">
        <div class="form-group">
            <label for="principal">Nama Perusahaan <span class="text-danger">*</span></label>
            <input id="principal" name="principal" class="form-control" value="<?= set_value('principal'); ?>" placeholder="Perusahaan">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat <span class="text-danger">*</span></label>
            <textarea id="alamat" name="alamat" rows="2" class="form-control" placeholder="Alamat"></textarea>
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
    <div class="col-md">
        <label><small class="ml-2 text-secondary">Pejabat Penandatangan</small></label>
        <div class="border-fade px-3 pt-2">
            <div class="form-group">
                <label for="pejabat">Nama Lengkap <span class="text-danger">*</span></label>
                <input id="pejabat" name="pejabat" class="form-control" value="<?= set_value('pejabat'); ?>" placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan <span class="text-danger">*</span></label>
                <input id="jabatan" name="jabatan" class="form-control" value="<?= set_value('jabatan'); ?>" placeholder="Jabatan">
            </div>
        </div>
        <div class="text-right px-3 pt-2">
            <small class="text-danger"><i>* kolom yang harus diisi</i></small>
        </div>
    </div>
</div>