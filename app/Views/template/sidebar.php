<?php
$menuItems[] = ['menu' => 'Data Jaminan', 'url' => 'guarantee', 'icon' => 'fas fa-certificate'];
$menuItems[] = ['menu' => 'Inforce Jaminan', 'url' => 'inforce', 'icon' => 'fas fa-check-circle'];
$menuItems[] = ['menu' => 'Data Nasabah', 'url' => 'client', 'icon' => 'fas fa-user-shield'];
$menuItems[] = ['menu' => 'Asuransi', 'url' => 'insurance', 'icon' => 'fas fa-shield-alt'];

$userAccess = 201;
/*
$ideNavs[] = array('text' => '', 'icon' => '', 'url' => '', 'access' => null);
$ideNavs[] = array('text' => '', 'icon' => '', 'child' => array(
    ['text' => '', 'icon' => '', 'url' => '', 'access' => null]
), 'access' => null);
*/
function accessGrant(int $accessId, ?string $canAccess)
{
    if ($canAccess === null) {
        return true;
    } else {
        $granted = false;
        $ids = explode('|', $canAccess);
        foreach ($ids as $id) if (intval($id) === $accessId) $granted = true;
        return $granted;
    }
}
$ideNavs[] = array('text' => 'Blanko', 'icon' => 'fas fa-certificate', 'child' => array(
    ['text' => 'Data Blanko', 'icon' => 'fas fa-certificate', 'url' => '#']
));
$ideNavs[] = array('text' => 'Jaminan', 'icon' => 'fas fa-certificate', 'child' => array(
    ['text' => 'Data Jaminan', 'icon' => 'fas fa-database', 'url' => 'guarantee'],
    ['text' => 'Inforce', 'icon' => 'fas fa-check-circle', 'url' => 'inforce']
));
$ideNavs[] = array('text' => 'Data Nasabah', 'icon' => 'fas fa-user-shield', 'url' => 'client');
$ideNavs[] = array('text' => 'Asuransi', 'icon' => 'fas fa-shield-alt', 'url' => 'insurance');
foreach ($ideNavs as $key => $navs) {
    $active = false;
    $url = $navs['url'] ?? null;
    $child = $navs['child'] ?? array();
    if ($url !== null && url_is($url . '*')) $active = true;
    foreach ($child as $ky => $ch) {
        $activeChild = false;
        if (url_is($ch['url'] . '*')) {
            $active = true;
            $activeChild = true;
        }
        $ideNavs[$key]['child'][$ky]['active'] = $activeChild;
    }
    $ideNavs[$key]['active'] = $active;
}
// dd($ideNavs);
?>
<aside class="main-sidebar sidebar-dark-info elevation-4">
    <a href="/" class="brand-link link-transparent">
        <img src="<?= SURETY_DOMAIN; ?>asset/img/icon/emblem_for_dark.svg" alt="" class="brand-image">
        <span class="brand-text font-weight-light">SuretyBond <strong>Apps</strong></span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= userdata('foto'); ?>" class="img-circle elevation-1" alt="">
            </div>
            <div class="info">
                <a href="/user" class="d-block"><?= userdata('nama'); ?></a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link<?= url_is('dashboard') ? ' active' : ''; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header">MENU</li>
                <?php foreach ($ideNavs as $ides) :
                    $url = $ides['url'] ?? null;
                    $child = $ides['child'] ?? null; ?>
                    <li class="nav-item<?= $ides['active'] && $child !== null ? ' menu-open' : ''; ?>">
                        <a href="<?= $url === null ? '#' : '/' . $url; ?>" class="nav-link<?= $ides['active'] ? ' active' : ''; ?>">
                            <i class="nav-icon <?= $ides['icon']; ?>"></i>
                            <p><?= $ides['text']; ?><?= $child !== null ? '<i class="fas fa-angle-left right"></i>' : ''; ?></p>
                        </a>
                        <?php if ($child !== null) : ?>
                            <ul class="nav nav-treeview">
                                <?php foreach ($child as $cld) : ?>
                                    <li class="nav-item">
                                        <a href="<?= $cld['url'] == '#' ? '#' : '/' . $cld['url']; ?>" class="nav-link<?= $cld['active'] ? ' active' : ''; ?>">
                                            <i class="<?= $cld['icon']; ?> nav-icon"></i>
                                            <p><?= $cld['text']; ?></p>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
                <li class="nav-header">USER</li>
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