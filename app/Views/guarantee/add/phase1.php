<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php $validatError = session()->getFlashdata('validate_error'); ?>
<form method="POST">
    <?= csrf_field(); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Principal dan Asuransi</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <?php if ($validatError !== null) : ?>
                <div class="text-center">
                    <p class="text-danger text-sm">Mohon Lengkapi Data Principal dan Asuransi.</p>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md">
                    <div class="border-fade px-4 pt-3 pb-2 mb-3">
                        <?= $this->include('guarantee/add/principal'); ?>
                    </div>
                </div>
                <div class="col-md">
                    <div class="border-fade px-4 pt-3 pb-2">
                        <?= $this->include('guarantee/add/asuransi'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body p-3 text-md-right text-center">
            <button type="submit" class="btn btn-primary text-bold" disabled>Simpan dan Lanjutkan<i class="fas fa-arrow-circle-right ml-3"></i></button>
        </div>
    </div>
</form>

<?= $this->endSection(); ?>