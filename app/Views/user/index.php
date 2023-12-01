<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body box-profile">
                <div class="text-center mw-2 mx-auto">
                    <img class="profile-user-img img-fluid img-circle w-100" src="<?= userdata('foto'); ?>" alt="">
                </div>
                <h3 class="profile-username text-center mt-3 mb-0"><?= userdata('nama'); ?></h3>
                <p class="text-muted text-center"><?= userdata('user'); ?></p>
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item text-center">
                        <span class="text-bold"><?= userdata('office'); ?></span>
                    </li>
                    <li class="list-group-item text-center">
                        <span class="text-secondary"><?= userdata('role'); ?></span>
                    </li>
                </ul>
                <a href="/setting" class="btn btn-primary btn-block">
                    <i class="fas fa-cog mr-2"></i>Pengaturan Akun
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#about_me" data-toggle="tab">About Me</a></li>
                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="active tab-pane" id="about_me">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Nama:</strong>
                                <p class="mb-0"><?= userdata('nama'); ?></p>
                            </li>
                            <li class="list-group-item">
                                <strong>Username:</strong>
                                <p class="mb-0"><?= userdata('user'); ?></p>
                            </li>
                            <li class="list-group-item">
                                <strong>Office ID:</strong>
                                <p class="mb-0"><?= userdata('office_id'); ?></p>
                            </li>
                            <li class="list-group-item">
                                <strong>Role ID:</strong>
                                <p class="mb-0"><?= userdata('role_id'); ?></p>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-pane" id="timeline">
                        <div class="timeline timeline-inverse">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>