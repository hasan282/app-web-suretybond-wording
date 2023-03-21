<?php
$now = $now ?? 1;
$max = $max ?? 5;
?>
<div class="card">
    <div class="card-body py-2">
        <div class="row">
            <div class="col-md d-flex">
                <p class="my-auto mx-md-2 mx-auto">
                    <span class="text-muted">Halaman </span><span id="halaman" class="text-bold"><?= $now; ?></span><span class="text-muted"> dari </span><span id="halaman_max" class="text-bold"><?= $max; ?></span>
                </p>
            </div>
            <div class="col-md text-center">
                <div class="btn-group mt-md-0 mt-3">
                    <button type="button" class="btn btn-secondary data-nav" <?= $now === 1 ? 'disabled ' : ''; ?>data-page="first">
                        <i class="fas fa-angle-double-left"></i>
                    </button>
                    <button type="button" class="btn btn-secondary data-nav" <?= $now === 1 ? 'disabled ' : ''; ?>data-page="prev">
                        <i class="fas fa-angle-left"></i>
                    </button>
                    <button type="button" class="btn btn-secondary data-nav" <?= $now === $max ? 'disabled ' : ''; ?>data-page="next">
                        <i class="fas fa-angle-right"></i>
                    </button>
                    <button type="button" class="btn btn-secondary data-nav" <?= $now === $max ? 'disabled ' : ''; ?>data-page="last">
                        <i class="fas fa-angle-double-right"></i>
                    </button>
                </div>
            </div>
            <div class="col-md"></div>
        </div>
    </div>
</div>