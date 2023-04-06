<div class="row px-md-2 px-lg-3 px-xl-5">
    <div class="col-md">

        <div class="form-group mw-3">
            <label for="">Jenis Jaminan</label>
            <select name="" id="" class="form-control">
                <option selected disabled>---</option>
                <option value="">Jaminan Penawaran</option>
            </select>
        </div>

        <div class="form-group">
            <label for="">Nomor Jaminan</label>
            <input id="" name="" class="form-control" placeholder="Nomor">
        </div>

        <div class="form-group mw-3 pt-2">
            <label>Nilai Jaminan<span class="btn btn-default btn-sm py-0 ml-2 text-bold mb-1">auto</span></label>
            <div class="input-group">
                <select name="currency" id="currency" class="form-control mw-1">
                    <option value="3">EUR</option>
                    <option selected value="1">IDR</option>
                    <option value="2">USD</option>
                </select>
                <input type="text" name="nilai" id="nilai" class="form-control" data-inputmask="'alias':'numeric','groupSeparator':'.','radixPoint':','" data-mask>
            </div>
        </div>

        <div class="form-group mw-3">
            <label for="">Penggunaan Bahasa</label>
            <select name="" id="" class="form-control">
                <option value="" selected>Indonesia</option>
                <option value="">English</option>
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
                <label for="tanggal_from" class="col-xl-4 col-form-label text-xl-right">Dari Tanggal</label>
                <div class="input-group date col-xl-8" id="tanggal_from" data-target-input="nearest">
                    <div class="input-group-prepend" data-target="#tanggal_from" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                    </div>
                    <input type="hidden" id="val_tanggal_from" name="tanggal_from">
                    <input type="text" class="form-control datetimepicker-input" id="tanggal_from_input" data-target="#tanggal_from" placeholder="Tanggal">
                </div>
            </div>

            <div class="form-group row mb-2 mb-xl-3">
                <label for="tanggal_from" class="col-xl-4 col-form-label text-xl-right">Sampai Tanggal</label>
                <div class="input-group date col-xl-8" id="tanggal_from" data-target-input="nearest">
                    <div class="input-group-prepend" data-target="#tanggal_from" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                    </div>
                    <input type="hidden" id="val_tanggal_from" name="tanggal_from">
                    <input type="text" class="form-control datetimepicker-input" id="tanggal_from_input" data-target="#tanggal_from" placeholder="Tanggal">
                </div>
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
                <label for="days" class="col-xl-4 col-form-label text-xl-right">Tempat Terbit</label>
                <div class="input-group col-xl-8 mw-2">
                    <input type="text" name="days" id="days" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="tanggal_from" class="col-xl-4 col-form-label text-xl-right">Tanggal Terbit</label>
                <div class="input-group date col-xl-8" id="tanggal_from" data-target-input="nearest">
                    <div class="input-group-prepend" data-target="#tanggal_from" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                    </div>
                    <input type="hidden" id="val_tanggal_from" name="tanggal_from">
                    <input type="text" class="form-control datetimepicker-input" id="tanggal_from_input" data-target="#tanggal_from" placeholder="Tanggal">
                </div>
            </div>

        </div>

    </div>
</div>