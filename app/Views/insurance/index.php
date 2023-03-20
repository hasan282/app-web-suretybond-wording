<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php
$asuransi = array('BINAGRIYA', 'BUMIDA', 'MALACCA', 'MAXIMUS', 'KRESNA');
?>
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body text-bold">
                <div class="list-group" id="list_asuransi" role="tablist">
                    <?php foreach ($asuransi as $no => $ai) : ?>
                        <a class="list-group-item list-group-item-action<?= ($no === 0) ? ' active' : ''; ?>" id="list_<?= strtolower($ai); ?>_list" data-toggle="list" href="#list_<?= strtolower($ai); ?>" role="tab" aria-controls="<?= strtolower($ai); ?>"><?= $ai; ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="text-center">
                    <button class="btn btn-sm btn-outline-primary text-bold mt-3">
                        <i class="fas fa-plus mr-2"></i>Tambah Data Asuransi
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="card">
            <div class="card-body pb-2">
                <div class="tab-content" id="list_asuransiContent">
                    <?php foreach ($asuransi as $no => $as) : ?>
                        <div class="tab-pane fade<?= ($no === 0) ? ' show active' : ''; ?>" id="list_<?= strtolower($as); ?>" role="tabpanel" aria-labelledby="list_<?= strtolower($as); ?>_list">
                            <div class="text-center text-secondary pb-3">
                                <h5 class="text-bold">PT. ASURANSI <?= $as; ?> UPAKARA</h5>
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
                                    <p class="text-muted mb-0">
                                        <i class="fas fa-briefcase fa-fw mr-2"></i>Kepala Cabang
                                    </p>
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
                                    <p class="text-muted mb-0">
                                        <i class="fas fa-briefcase fa-fw mr-2"></i>Kepala Cabang
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>