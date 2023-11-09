<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Menu extends Seeder
{
    public function run()
    {
        $menu = array(
            array(
                'id' => 101,
                'text' => 'Database',
                'icon' => 'fas fa-database'
            ),
            array(
                'id' => 201,
                'text' => 'Blanko',
                'icon' => 'fas fa-file'
            ),
            array(
                'id' => 301,
                'text' => 'Jaminan',
                'icon' => 'fas fa-certificate'
            ),
        );
        $this->db->table('menus')->insertBatch($menu);
    }
}
