<div class="row">
    <div class="col-7">
        <?php if (intval($jaminan['issued']) === 1) : ?>
            <div class="border-fade px-3 pt-2 text-center">
                <p class="mb-1 text-info">Pastikan cetak Jaminan dengan nomor Blanko :</p>
                <h3 class="mb-2"><span class="text-secondary"><?= $jaminan['prefix_print']; ?></span><strong><?= $jaminan['blanko_print']; ?></strong></h3>
                <div class="text-center my-3 pt-4">
                    <button class="btn btn-primary btn-sm mx-1" id="buttonused"><i class="fas fa-check-circle mr-2"></i>Konfirmasi Cetak</button>
                    <button class="btn btn-danger btn-sm mx-1" id="buttoncrash"><i class="fas fa-exclamation-triangle mr-2"></i>Lapor Blanko Rusak</button>
                </div>
            </div>
            <form id="printforms" method="POST">
                <?= csrf_field(); ?>
                <input type="hidden" name="jaminan" value="<?= $params; ?>">
            </form>
        <?php endif; ?>
    </div>
    <div class="col-5">
        <div class="mx-auto mw-3 text-center pb-4">
            <small class="text-secondary">Print dokumen dengan</small>
            <button type="button" id="buttonpdf" class="btn btn-danger btn-lg btn-block">
                Jadikan <strong>PDF</strong>
            </button>
            <small class="text-secondary">atau</small>
            <button type="button" class="btn btn-primary btn-block" disabled>
                Download File <strong>Word</strong>
            </button>
        </div>
    </div>
</div>