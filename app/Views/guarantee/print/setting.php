<?php
$profiles = new \App\Models\ProfileModel;
?>
<form id="formsettings" method="POST">
    <div class="row">
        <div class="col-xl-4">
            <div class="pr-xl-3" id="boxselectprofile">
                <button type="button" id="newprofile" class="btn btn-primary btn-sm mb-4">
                    <i class="fas fa-plus mr-2"></i>Buat Profil Pengaturan Baru
                </button>
                <div class="form-group">
                    <label for="profile">Profil Pengaturan</label>
                    <select id="profile" class="form-control">
                        <option selected disabled>---</option>
                        <?php foreach ($profiles->listProfile()->where(['active' => 1])->data() as $pro) : ?>
                            <option value="<?= $pro['enkripsi']; ?>"><?= $pro['profile']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="button" id="editprofile" class="btn btn-secondary btn-sm hide-content">
                    <i class="fas fa-edit mr-2"></i>Edit Pengaturan
                </button>
            </div>
            <div class="pr-xl-3 hide-content" id="boxprofilename">
                <div class="form-group">
                    <label for="profile_name">Profil Pengaturan</label>
                    <input id="profile_name" name="profile_name" class="form-control" placeholder="Nama Profil">
                </div>
                <input type="hidden" name="enkriprofile" id="enkriprofile" value="">
                <input type="hidden" name="urihash" value="<?= $jaminan['enkrip']; ?>">
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="form-group mw-2">
                <label for="paper">Ukuran Kertas</label>
                <select name="paper" id="paper" class="form-control pagesettings" disabled>
                    <option value="A4">A4</option>
                    <option value="LETTER">LETTER</option>
                    <option value="LEGAL">LEGAL</option>
                </select>
            </div>
            <label for="page_top">Margin Halaman <small>(milimeters)</small></label>
            <div class="border-fade py-3 px-3 mb-3">
                <div class="input-group mw-2 mx-auto">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-arrow-circle-up"></i></span>
                    </div>
                    <input type="number" id="page_top" name="page_top" class="form-control pagesettings" placeholder="Top" disabled>
                </div>
                <div class="input-group mw-3 mx-auto my-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-arrow-circle-left"></i></span>
                    </div>
                    <input type="number" id="page_left" name="page_left" class="form-control pagesettings" placeholder="Left" disabled>
                    <input type="number" id="page_right" name="page_right" class="form-control pagesettings" placeholder="Right" disabled>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-arrow-circle-right"></i></span>
                    </div>
                </div>
                <div class="input-group mw-2 mx-auto">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-arrow-circle-down"></i></span>
                    </div>
                    <input type="number" id="page_bottom" name="page_bottom" class="form-control pagesettings" placeholder="Bottom" disabled>
                </div>
            </div>
            <div class="form-group mw-2">
                <label for="spacing">Spacing</label>
                <div class="input-group">
                    <input type="number" id="spacing" name="spacing" class="form-control pagesettings" placeholder="Spacing" disabled>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-percentage"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="form-group mw-2 mx-md-auto">
                <label for="sign_margin">Margin Tanda Tangan</label>
                <div class="input-group">
                    <input type="number" id="sign_margin" name="sign_margin" class="form-control pagesettings" placeholder="Margin" disabled>
                    <div class="input-group-append">
                        <span class="input-group-text"><strong>mm</strong></span>
                    </div>
                </div>
            </div>
            <div class="form-group mw-2 mx-md-auto">
                <label for="sign_width">Lebar Tanda Tangan</label>
                <div class="input-group">
                    <input type="number" id="sign_width" name="sign_width" class="form-control pagesettings" placeholder="Lebar" disabled>
                    <div class="input-group-append">
                        <span class="input-group-text"><strong>mm</strong></span>
                    </div>
                </div>
            </div>
            <div class="form-group mw-2 mx-md-auto">
                <label for="sign_space">Jarak Antar Tanda Tangan</label>
                <div class="input-group">
                    <input type="number" id="sign_space" name="sign_space" class="form-control pagesettings" placeholder="Jarak" disabled>
                    <div class="input-group-append">
                        <span class="input-group-text"><strong>mm</strong></span>
                    </div>
                </div>
            </div>
            <div class="form-group mw-2 mx-md-auto">
                <label for="sign_height">Tinggi Tanda Tangan</label>
                <div class="input-group">
                    <input type="number" id="sign_height" name="sign_height" class="form-control pagesettings" placeholder="Tinggi" disabled>
                    <div class="input-group-append">
                        <span class="input-group-text"><strong>mm</strong></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="hide-content" id="boxbuttonsave">
                <button type="submit" class="btn btn-primary" id="btnsave" disabled>
                    <i class="fas fa-plus mr-2"></i>Tambahkan Profil Pengaturan
                </button>
            </div>
            <div class="hide-content" id="boxbuttonedit">
                <button type="submit" class="btn btn-secondary" id="btnsavedit">
                    <i class="fas fa-save mr-2"></i>Simpan Profil Pengaturan
                </button>
            </div>
            <div class="hide-content" id="boxbuttonapply">
                <button type="button" class="btn btn-primary" id="btnapply">
                    <i class="fas fa-check-circle mr-2"></i>Terapkan Profil
                </button>
            </div>
        </div>
    </div>
    <?= csrf_field(); ?>
</form>
<div class="hide-content">
    <form action="/guarantee/profile/apply" method="POST">
        <input type="hidden" name="profile" id="hid_profile" value="">
        <input type="hidden" name="jaminan" id="hid_jaminan" value="<?= $jaminan['enkrip']; ?>">
        <?= csrf_field(); ?>
        <button type="submit" id="hid_submit">save</button>
    </form>
</div>