<?= $this->extend('template/basic'); ?>

<?= $this->section('body'); ?>

<?php
$dark = get_cookie('DRKMOD') ?? '0';
$darkmode = (intval($dark) === 1);
?>

<body class="hold-transition <?= $darkmode ? ' dark-mode' : ''; ?> bg-pattern<?= $darkmode ? '-dark' : ''; ?>" id="contentwrapper">
    <div class="container py-5">
        <div class="card">
            <?php $errorMessage = 'Oops! Page not found.'; ?>
            <div class="card-body">
                <div class="error-page">
                    <h2 class="headline text-warning">404</h2>
                    <div class="error-content pt-2 pb-3">
                        <h3><i class="fas fa-exclamation-triangle text-warning mr-2"></i><?= $errorMessage; ?></h3>
                        <p class="mt-4">We could not find the page you were looking for. Meanwhile, you may <a href="/">return to login</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>