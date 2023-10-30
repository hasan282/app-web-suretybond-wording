<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php $issued = intval($jaminan['issued']) === 1; ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title text-secondary">Detail Data Jaminan</h3>
        <div class="card-tools"> <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button> </div>
    </div>
    <div class="card-body">
        <?php if (!$complete) : ?>
            <div class="callout callout-warning bg-light">
                <div class="row">
                    <div class="col-md-7">
                        <h5>Pengisian Data Jaminan Belum Lengkap!</h5>
                        <p class="text-secondary">Silahkan lengkapi data jaminan terlebih dahulu.</p>
                    </div>
                    <div class="col-md-5 d-flex mt-3 mt-md-0">
                        <button class="btn btn-primary my-auto ml-md-auto text-bold" onclick="window.location.href='/guarantee/add/<?= $jaminan['enkrip']; ?>'">
                            <i class="fas fa-pen-square mr-2"></i>Lengkapi Data Jaminan
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-xl-9 col-lg-8">

                <?= $this->include('guarantee/detail/infodata'); ?>

            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="mw-2 mx-auto position-relative h-100 pt-3" style="min-height:260px">
                    <?php if (!$issued && $complete) : ?>
                        <button class="btn btn-secondary btn-sm btn-block" disabled>
                            <i class="fas fa-edit mr-2"></i>Edit Data Jaminan
                        </button>
                    <?php endif; ?>
                    <?php if ($jaminan['issued'] === null) : ?>
                        <button class="btn btn-danger btn-sm mt-2 btn-block" disabled>
                            <i class="fas fa-trash-alt mr-2"></i>Hapus Data Jaminan
                        </button>
                    <?php endif; ?>
                    <div class="absolute-bottom pb-3 text-center w-100">
                        <?php if (!$complete) : ?>
                            <small class="text-danger"><i class="fas fa-info-circle mr-2"></i>Data Belum Lengkap</small>
                        <?php endif; ?>
                        <?php if ($jaminan['issued'] === null) : ?>
                            <button type="button" id="inforcerequest" <?= $complete ? '' : 'disabled '; ?>class="btn btn-default text-bold btn-sm btn-block mt-2 mb-3">
                                <i class="fas fa-certificate mr-2"></i>Pengajuan Inforce
                            </button>
                        <?php else : ?>
                            <div class="border-fade">
                                <p class="text-sm text-secondary mt-2">Inforce Status</p>
                                <?php if (intval($jaminan['issued']) === 1) : ?>
                                    <p class="text-bold text-success">Disetujui</p>
                                <?php else : ?>
                                    <p class="text-bold text-secondary">Menunggu Persetujuan</p>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <a href="/guarantee/print/<?= $jaminan['enkrip']; ?>" class="btn btn-primary btn-lg mt-2 btn-block text-bold<?= $complete ? '' : ' disabled'; ?>">
                            <i class="fas fa-print mr-2"></i>Cetak Jaminan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>

<script>
    $(function() {
        <?php if ($jaminan['issued'] === null) : ?>
            $('#inforcerequest').click(function() {
                Swal.fire({
                    title: 'Ajukan Inforce Jaminan?',
                    text: 'Pengajuan Inforce tidak dapat dibatalkan',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: '<i class="fas fa-check-circle mr-2"></i>Ajukan Inforce',
                    cancelButtonText: '<i class="fas fa-times mr-2"></i> Tidak',
                    showCloseButton: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = BaseURL + 'inforce/request/<?= $jaminan['enkrip']; ?>';
                    }
                });
            });
        <?php endif; ?>
    });
</script>

<?= $this->endSection(); ?>