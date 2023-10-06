<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="mx-auto mw-7">
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <p class="text-muted mb-1">PRINCIPAL</p>
                <h6 class="text-bold"><?= $jaminan['principal']; ?></h6>
                <hr>
                <p class="text-muted mb-1">ASURANSI</p>
                <h6 class="text-bold mb-1"><?= $jaminan['asuransi']; ?></h6>
                <p class="mb-0">KANTOR <?= $jaminan['cabang']; ?></p>
            </div>
        </div>
    </div>
</div>
<form method="POST">
    <?= csrf_field(); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Informasi Proyek</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">

            <?= $this->include('guarantee/add/proyek'); ?>

        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Informasi Jaminan</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">

            <?= $this->include('guarantee/add/jaminan'); ?>

        </div>
    </div>
    <div class="mx-auto mw-7">
        <div class="card">
            <div class="card-body text-center p-3">
                <button type="submit" class="btn btn-primary text-bold">
                    <i class="fas fa-save mr-2"></i>Simpan Data Jaminan
                </button>
            </div>
        </div>
    </div>
</form>
<?php
$dataField = array(
    'obligee' => [$jaminan['obligee'], 'val'],
    'obligee_alamat' => [$jaminan['obligee_alamat'], 'val'],
    'proyek' => [$jaminan['proyek_id'], 'val'],
    'proyek_nama' => [$jaminan['proyek_nama'], 'val'],
    'pekerjaan' => [$jaminan['pekerjaan_id'], 'val'],
    'proyek_alamat' => [$jaminan['proyek_alamat'], 'val'],
    // 'currency_proyek' => [$jaminan['currency_proyek_id'], 'val'],
    'proyek_nilai' => [nformat($jaminan['proyek_nilai']), 'val'],
    'dokumen' => [$jaminan['dokumen'], 'val'],
    'dokumen_date' => [$jaminan['dokumen_date'], 'dateValue'],
    'jaminan_tipe' => [$jaminan['jenis_id'], 'val'],
    'nomor' => [$jaminan['nomor'], 'val'],
    'currency' => [$jaminan['currency_id'], 'val'],
    'nilai' => [nformat($jaminan['nilai']), 'val'],
    'bahasa' => [$jaminan['bahasa'], 'val'],
    'date_from' => [$jaminan['date_from'], 'dateValue'],
    'date_to' => [$jaminan['date_to'], 'dateValue'],
    'days' => [$jaminan['days'], 'val'],
    'issued_place' => [$jaminan['issued_place'], 'val'],
    'issued_date' => [$jaminan['issued_date'], 'dateValue']
);
foreach ($dataField as $key => $arr) if ($arr[0] === null) unset($dataField[$key]);
?>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>

<script>
    const INPUTVAL = <?= json_encode($dataField); ?>;
    $(function() {
        $("[data-mask]").inputmask();
        $('#dokumen_date').inputDate();
        $('.inputdate').inputDate();
        $('#issued_date').inputDate();
        $('#currency').on('change', function() {
            const CURVAL = $(this).val();
            $('#currency_jaminan').val(CURVAL);
        });
        for (const ID in INPUTVAL) $('#' + ID)[INPUTVAL[ID][1]](INPUTVAL[ID][0]);
        $('#days').rangeFrom('date_from', 'date_to');
    });
</script>

<?= $this->endSection(); ?>