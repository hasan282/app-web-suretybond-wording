<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenuSubs extends Seeder
{
    public function run()
    {
        $submenu = array(
            array(
                'id' => 111,
                'id_menu' => 101,
                'text' => 'User Account',
                'icon' => 'fas fa-user-alt',
                'url' => 'user/account'
            ),
            array(
                'id' => 112,
                'id_menu' => 101,
                'text' => 'Asuransi',
                'icon' => 'fas fa-shield-alt',
                'url' => 'insurance'
            ),
            array(
                'id' => 121,
                'id_menu' => 201,
                'text' => 'Data Blanko',
                'icon' => 'fas fa-database',
                'url' => '#'
            ),
            array(
                'id' => 122,
                'id_menu' => 201,
                'text' => 'Pengiriman',
                'icon' => 'fas fa-archive',
                'url' => '#'
            ),
            array(
                'id' => 123,
                'id_menu' => 201,
                'text' => 'Rekap Blanko',
                'icon' => 'fas fa-list-ul',
                'url' => '#'
            ),
            array(
                'id' => 131,
                'id_menu' => 301,
                'text' => 'Data Jaminan',
                'icon' => 'fas fa-database',
                'url' => 'guarantee'
            ),
            array(
                'id' => 132,
                'id_menu' => 301,
                'text' => 'Inforce',
                'icon' => 'fas fa-check-circle',
                'url' => 'inforce'
            ),
            array(
                'id' => 211,
                'id_menu' => null,
                'text' => 'Data Nasabah',
                'icon' => 'fas fa-user-shield',
                'url' => 'client'
            ),
            array(
                'id' => 221,
                'id_menu' => null,
                'text' => 'Data Asuransi',
                'icon' => 'fas fa-shield-alt',
                'url' => 'insurance'
            ),
        );
        $this->db->table('menu_sub')->insertBatch($submenu);
    }
}
