<div class="row px-md-2 px-lg-3 px-xl-5">
    <div class="col-md">
        <div class="mx-auto mw-5">

            <div class="form-group">
                <label for="">Pemilik Proyek (Obligee)</label>
                <input id="" name="" class="form-control" placeholder="Obligee">
            </div>

            <div class="form-group">
                <label for="">Alamat Obligee</label>
                <textarea id="" name="" rows="3" class="form-control" placeholder="Alamat"></textarea>
            </div>

            <div class="form-group mw-3">
                <label for="">Jenis Proyek</label>
                <select name="" id="" class="form-control">
                    <option selected disabled>---</option>
                    <option value="">Pemerintah</option>
                    <option value="">Swasta</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Nama Proyek</label>
                <textarea id="" name="" rows="2" class="form-control" placeholder="Proyek"></textarea>
            </div>

            <div class="form-group mw-3">
                <label for="">Jenis Pekerjaan</label>
                <select name="" id="" class="form-control">
                    <option selected disabled>---</option>
                    <option value="">Konstruksi</option>
                    <option value="">Instalasi</option>
                    <option value="">Konsultan</option>
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
                <label>Nilai Proyek</label>
                <div class="input-group">
                    <select name="currency" id="currency" class="form-control mw-1">
                        <option value="3">EUR</option>
                        <option selected value="1">IDR</option>
                        <option value="2">USD</option>
                    </select>
                    <input type="text" name="nilai" id="nilai" class="form-control" data-inputmask="'alias':'numeric','groupSeparator':'.','radixPoint':','" data-mask>
                </div>
            </div>

            <p class="mb-1"><small class="text-secondary ml-2">Dokumen Pendukung</small></p>
            <div class="border-fade px-3 pt-2">
                <div class="form-group">
                    <label for="">Dokumen</label>
                    <textarea id="" name="" rows="2" class="form-control" placeholder="Dokumen"></textarea>
                </div>
                <div class="form-group row">
                    <label for="XXXXXX" class="col-xl-3 col-form-label text-xl-right">Tanggal</label>
                    <div class="input-group date col-xl-9" id="XXXXXX" data-target-input="nearest">
                        <div class="input-group-prepend" data-target="#XXXXXX" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                        </div>
                        <input type="hidden" id="val_XXXXXX" name="XXXXXX">
                        <input type="text" class="form-control datetimepicker-input" id="XXXXXX_input" data-target="#tanggal_from" placeholder="Tanggal">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>