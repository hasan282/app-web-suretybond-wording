<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<style>
    .selected-avatar {
        border: 2px solid #007bff;
        background-color: #f2f2f2;
        border-radius: 5px;
        position: relative;
    }

    .selected-avatar .close-icon {
        position: absolute;
        top: 5px;
        right: 5px;
        cursor: pointer;
    }

    .add-card {
        text-align: center;
        cursor: pointer;
    }

    .add-card i {
        color: #007bff;
    }

    #avatarInput {
        display: none;
    }
</style>

<div class="modal fade" id="photo" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">Ganti Foto Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/upload" method="post" enctype="multipart/form-data">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-10 mb-7">
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile text-center">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div id="currentAvatar" class="selected-avatar">
                                                <img src="<?= userdata('foto') ?>" class="img img-thumbnail profile-avatar" style="max-width: 100%; height: 110%;" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="newAvatar" class="selected-avatar">
                                                <img src="" class="img img-thumbnail profile-avatar" style="max-width: 100%; height: 110%;" onclick="selectProfileAvatar(this)" />
                                                <span class="close-icon" onclick="cancel()" style="font-weight: bold; color: black;">X</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="box-profile-content">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="card add-card" onclick="triggerAvatarInput()">
                                                <i class="fas fa-plus-circle fa-2x"></i>
                                            </div>
                                            <input type="file" id="avatarInput" accept="image/*" onchange="handleFileUpload(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="/user" class="btn btn-primary btn-block text-bold"><i class="fa fa-save mr-2"></i>Save Changes</a>
                                <button type="button" class="btn btn-secondary btn-block text-bold" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var hasUploadedPhoto = false;

    function triggerAvatarInput() {
        if (!hasUploadedPhoto) {
            document.getElementById('avatarInput').click();
        } else {
            alert('Hanya bisa menambahkan 1 foto!');
        }
    }

    function handleFileUpload(input) {
        var file = input.files[0];
        if (file) {
            if (!hasUploadedPhoto) {
                document.getElementById('newAvatar').getElementsByTagName('img')[0].src = URL.createObjectURL(file);
                hasUploadedPhoto = true;
                input.value = '';
            } else {}
        }
    }

    function cancel() {
        document.getElementById('newAvatar').getElementsByTagName('img')[0].src = '';
        hasUploadedPhoto = false;
    }
</script>

<?= $this->endSection(); ?>