<?php
$userImage = 'hack.jpg';
$menuItems = array(
    ['menu' => 'Data Jaminan', 'url' => 'guarantee', 'icon' => '	fas fa-certificate'],
    ['menu' => 'Data Klien', 'url' => 'client', 'icon' => '	fas fa-briefcase'],
    ['menu' => 'Asuransi', 'url' => 'insurance', 'icon' => 'fas fa-shield-alt']
);
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link link-transparent">
        <img src="<?= SURETY_DOMAIN; ?>asset/img/icon/emblem_for_dark.svg" alt="" class="brand-image">
        <span class="brand-text font-weight-light">SuretyBond <strong>Apps</strong></span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= SURETY_DOMAIN . 'asset/img/user/' . $userImage; ?>" class="img-circle elevation-1" alt="">
            </div>
            <div class="info">
                <a href="/user" class="d-block">Alexander Pierce</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link<?= url_is('dashboard') ? ' active' : ''; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header">MENU</li>
                <?php foreach ($menuItems as $mi) : ?>
                    <li class="nav-item">
                        <a href="/<?= $mi['url']; ?>" class="nav-link<?= url_is($mi['url'] . '*') ? ' active' : ''; ?>">
                            <i class="nav-icon <?= $mi['icon']; ?>"></i>
                            <p><?= $mi['menu']; ?></p>
                        </a>
                    </li>
                <?php endforeach; ?>
                <li class="nav-header">USER</li>
                <li class="nav-item">
                    <a href="/setting" class="nav-link<?= url_is('setting') ? ' active' : ''; ?>">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Pengaturan Akun</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/user/logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Keluar</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>