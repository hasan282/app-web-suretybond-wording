<div class="row">
    <div class="col-xl-4">

        <div class="pr-xl-3">
            <button class="btn btn-primary btn-sm mb-4" disabled>
                <i class="fas fa-plus mr-2"></i>Buat Profil Pengaturan Baru
            </button>
            <div class="form-group">
                <label for="profile">Profil Pengaturan</label>
                <select id="profile" class="form-control" disabled>
                    <option value="">MAXIMUS-PELAKSANAAN-1</option>
                </select>
            </div>
            <button class="btn btn-secondary btn-sm" disabled>
                <i class="fas fa-edit mr-2"></i>Edit Pengaturan
            </button>
        </div>
        <div class="pr-xl-3 hide-content">
            <div class="form-group">
                <label for="profile_name">Profil Pengaturan</label>
                <input id="profile_name" class="form-control">
            </div>
        </div>

    </div>
    <div class="col-xl-4 col-md-6">

        <div class="form-group mw-2">
            <label for="paper_size">Ukuran Kertas</label>
            <select name="paper_size" id="paper_size" class="form-control" disabled>
                <option value="" selected>A4</option>
                <option value="">LETTER</option>
                <option value="">LEGAL</option>
            </select>
        </div>

        <label>Margin Halaman</label>
        <div class="border-fade py-3 px-3 mb-3">
            <div class="input-group mw-2 mx-auto">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-arrow-circle-up"></i></span>
                </div>
                <input type="number" class="form-control" placeholder="Top" disabled>
            </div>
            <div class="input-group mw-3 mx-auto my-2">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-arrow-circle-left"></i></span>
                </div>
                <input type="number" class="form-control" placeholder="Left" disabled>
                <input type="number" class="form-control" placeholder="Right" disabled>
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-arrow-circle-right"></i></span>
                </div>
            </div>
            <div class="input-group mw-2 mx-auto">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-arrow-circle-down"></i></span>
                </div>
                <input type="number" class="form-control" placeholder="Bottom" disabled>
            </div>
        </div>
        <div class="form-group mw-2">
            <label for="spacing">Spacing</label>
            <div class="input-group">
                <input type="text" id="spacing" class="form-control" placeholder="Spacing" disabled>
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-percentage"></i></span>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xl-4 col-md-6">

        <div class="form-group mw-2 mx-md-auto">
            <label for="sign_margin">Margin Tanda Tangan</label>
            <input type="text" id="sign_margin" class="form-control" placeholder="Margin" disabled>
        </div>
        <div class="form-group mw-2 mx-md-auto">
            <label for="sign_width">Lebar Tanda Tangan</label>
            <input type="text" id="sign_width" class="form-control" placeholder="Lebar" disabled>
        </div>
        <div class="form-group mw-2 mx-md-auto">
            <label for="sign_gap">Jarak Antar Tanda Tangan</label>
            <input type="text" id="sign_gap" class="form-control" placeholder="Jarak" disabled>
        </div>
        <div class="form-group mw-2 mx-md-auto">
            <label for="sign_height">Tinggi Tanda Tangan</label>
            <input type="text" id="sign_height" class="form-control" placeholder="Tinggi" disabled>
        </div>

    </div>
</div>