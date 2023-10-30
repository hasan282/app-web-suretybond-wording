<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>


<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">

                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Edit Profile</h3>
                    </div>
                    <form id="quickForm">
                        <form action="<?= base_url('user/save') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id_user" value="">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama" value="<?= userdata('nama') ?> ">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" value="<?= userdata('user') ?>">
                                </div>
                                <div class="form-group">
                                    <label for="kantor">Kantor</label>
                                    <input type="text" name="kantor" class="form-control" id="kantor" value="<?= userdata('office') ?>">
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" id="jabatan" value="<?= userdata('role') ?>">
                                    <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Edit</button>
                                </div>
                            </div>
                        </form>
                    </form>
                </div>

            </div>


            <div class="col-md-6">
            </div>

        </div>

    </div>
</section>

</div>


<?= $this->endSection(); ?>