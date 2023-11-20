<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php
$dark = get_cookie('DRKMOD') ?? '0';
$darkmode = (intval($dark) === 1);
$tables = new \App\Libraries\Tables;
$users = $tables->userList(1);
?>
<div class="card">
    <div class="overlay<?= $darkmode ? ' dark' : ''; ?>" id="loading"></div>
    <div class="card-header">
        <h3 class="card-title">Data User Account : <strong id="count_data"><?= $users->count; ?></strong></h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool btn-expand" data-expand="0">
                <i class="fas fa-expand-alt"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body table-responsive p-0" id="userlist">

        <?= $users->content; ?>

    </div>
</div>

<?= $tables->footNavs($users->page_now, $users->page_max); ?>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>

<script>
    $(function() {
        $('#loading').setLoader({
            icon: 'fas fa-circle-notch'
        });
        $('.data-nav').navTable(function(page) {
            $('#userlist').setContent(BaseURL + 'tb/userdata/' + page);
        });
    });
</script>

<?= $this->endSection(); ?>