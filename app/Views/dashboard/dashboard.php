<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-lg-4 col-6">
        <div class="small-box bg-info text-lg">
            <div class="inner">
                <h3>1.500</h3>
                <p>Total List Jaminan</p>
            </div>
            <div class="icon">
                <i class="fas fa-file-alt"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>

        <div class="card">
            <div class="card-body">
                <a href="guarantee/add" class="btn btn-success btn-block"><i class="fas fa-plus"></i> Tambah Jaminan</a>
                <button type="button" class="btn btn-danger btn-block"><i class="fas fa-minus"></i> Hapus Jaminan</button>
                <button type="button" class="btn btn-primary btn-block"><i class="fas fa-edit"></i> Edit Jaminan</button>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-6">
        <div class="card">
            <div class="card-header text-secondary text-lg"><i class="fas fa-bell"></i> Notifikasi</div>
            <div class="card-body">
                <div class="callout callout-danger">
                    <h5>I am a danger callout!</h5>

                    <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire
                        soul,
                        like these sweet mornings of spring which I enjoy with my whole heart.</p>
                </div>
                <div class="callout callout-info">
                    <h5>I am an info callout!</h5>

                    <p>Follow the steps to continue to payment.</p>
                </div>
                <div class="callout callout-warning">
                    <h5>I am a warning callout!</h5>

                    <p>This is a yellow callout.</p>
                </div>
                <div class="callout callout-success">
                    <h5>I am a success callout!</h5>

                    <p>This is a green callout.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>