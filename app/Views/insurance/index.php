<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-4">

        <div class="card">
            <div class="card-body text-bold">
                <ul class="list-group">
                    <li class="list-group-item active">BINAGRIYA</li>
                    <li class="list-group-item">MAXIMUS</li>
                    <li class="list-group-item">MALACCA</li>
                    <li class="list-group-item">KRESNA</li>
                    <li class="list-group-item">BUMIDA</li>
                </ul>
            </div>
        </div>

    </div>
    <div class="col-8">

        <div class="card">
            <div class="card-body pb-1">

                <div class="text-center text-secondary pb-3">
                    <h5 class="text-bold">PT. ASURANSI BINAGRIYA UPAKARA</h5>
                </div>



                <div class="card bg-light">
                    <div class="card-body">

                        <h5 class="lead mb-3"><b>Kantor Pusat</b></h5>
                        <p class="text-muted mb-0">
                            <i class="fas fa-building fa-fw mr-2"></i>Demo Street 123, Demo City 04312, NJ
                        </p>
                        <p class="text-muted mb-0">
                            <i class="fas fa-user-tie fa-fw mr-2"></i>Nicole Pearson
                        </p>
                    </div>
                    <div class="card-footer text-right p-2">
                        <button class="btn btn-secondary btn-sm"><i class="fas fa-edit mr-2"></i>Edit Data</button>
                    </div>
                </div>



                <div class="card bg-light">
                    <div class="card-body">

                        <h5 class="lead mb-3"><b>Kantor Cabang Bintaro</b></h5>
                        <p class="text-muted mb-0">
                            <i class="fas fa-building fa-fw mr-2"></i>Demo Street 123, Demo City 04312, NJ
                        </p>
                        <p class="text-muted mb-0">
                            <i class="fas fa-user-tie fa-fw mr-2"></i>Nicole Pearson
                        </p>
                    </div>
                    <div class="card-footer text-right p-2">
                        <button class="btn btn-secondary btn-sm"><i class="fas fa-edit mr-2"></i>Edit Data</button>
                    </div>
                </div>




            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>