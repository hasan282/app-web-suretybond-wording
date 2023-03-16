<?= $this->extend('template/basic'); ?>

<?= $this->section('body'); ?>

<?php
$dark = get_cookie('DRKMOD') ?? '0';
$darkmode = (intval($dark) === 1);
?>

<body class="hold-transition login-page<?= $darkmode ? ' dark-mode' : ''; ?>">
    <div class="login-box">

        <?= $this->renderSection('login_box'); ?>

    </div>
    <?= $this->endSection(); ?>