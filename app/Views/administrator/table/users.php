<?php
$userdata = $userdata ?? array();
?>
<table class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th class="text-center"><i class="fas fa-cog"></i></th>
            <th class="border-right">Nama Lengkap</th>
            <th class="text-center">Username</th>
            <th class="border-left">Kantor Agen</th>
            <th class="text-center">Akses</th>
            <th colspan="2" class="text-center border-left"><i class="fas fa-cog"></i></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($userdata as $user) : ?>
            <tr>
                <td class="text-center py-0 align-middle">
                    <a href="" class="btn btn-default btn-sm disabled"><i class="fas fa-user-edit"></i></a>
                </td>
                <td class="border-right"><?= $user['nama']; ?></td>
                <td class="text-center"><?= $user['user']; ?></td>
                <td class="border-left"><?= $user['office']; ?></td>
                <td class="text-center"><?= $user['role']; ?></td>
                <td class="text-center py-0 align-middle border-left">
                    <button class="btn btn-default btn-sm" disabled>Reset Password</button>
                </td>
                <td>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input cursor-pointer" id="active_<?= $user['user']; ?>" checked disabled>
                        <label class="custom-control-label text-primary cursor-pointer" for="active_<?= $user['user']; ?>">Active</label>
                    </div>
                </td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>