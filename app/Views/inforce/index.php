<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php
$dark = get_cookie('DRKMOD') ?? '0';
$darkmode = (intval($dark) === 1);
$tables = new \App\Libraries\Tables;
$inforce = $tables->inforceList(1);
?>
<div class="row mb-3">
    <div class="col-xl-4 col-md-5 col-sm-6">

        <button type="button" class="btn btn-primary text-bold btn-block">
            <i class="fas fa-check-circle mr-2"></i>Inforce Semua Data Terpilih
        </button>

    </div>
    <div class="col-xl-5 col-md-7 col-sm-6 pt-3 pt-sm-0">

        <!--
        <div class="input-group">
            <input type="search" id="blanko_number" class="form-control" placeholder="Pencarian" disabled>
            <div class="input-group-append">
                <button type="button" id="btn_search" class="btn btn-default">
                    <i class="fas fa-search mx-2"></i>
                </button>
            </div>
        </div>
        -->

    </div>
    <div class="col-xl-3 pt-3 pt-xl-0">

        <!--
        <input type="text" class="form-control" disabled> 
        -->

    </div>
</div>
<div class="card">
    <div class="overlay<?= $darkmode ? ' dark' : ''; ?>" id="loading"></div>
    <div class="card-header">
        <h3 class="card-title">
            <span>Jaminan belum diaktivasi <strong id="count_data"><?= $inforce->count; ?></strong> Data</span>
        </h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool btn-expand" data-expand="0">
                <i class="fas fa-expand-alt"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body table-responsive p-0" id="inforcetable">

        <?= $inforce->content; ?>

    </div>
</div>

<?= $tables->footNavs($inforce->page_now, $inforce->page_max); ?>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>
<script>
    $(function() {
        $('#loading').setLoader({
            icon: 'fas fa-circle-notch'
        });
        $('.data-nav').navTable(function(page) {
            $('#inforcetable').setContent(BaseURL + 'tb/inforce/' + page);
        });
    });
</script>
<?= $this->endSection(); ?>