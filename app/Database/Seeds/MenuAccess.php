<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenuAccess extends Seeder
{
    public function run()
    {
        $access = array(

            array('id_role' => 101, 'id_submenu' => 111),
            array('id_role' => 101, 'id_submenu' => 112),
            array('id_role' => 101, 'id_submenu' => 121),
            array('id_role' => 101, 'id_submenu' => 122),
            array('id_role' => 101, 'id_submenu' => 123),
            array('id_role' => 101, 'id_submenu' => 131),
            array('id_role' => 101, 'id_submenu' => 132),
            array('id_role' => 101, 'id_submenu' => 211),

            array('id_role' => 102, 'id_submenu' => 111),
            array('id_role' => 102, 'id_submenu' => 112),
            array('id_role' => 102, 'id_submenu' => 121),
            array('id_role' => 102, 'id_submenu' => 122),
            array('id_role' => 102, 'id_submenu' => 123),
            array('id_role' => 102, 'id_submenu' => 131),
            array('id_role' => 102, 'id_submenu' => 132),
            array('id_role' => 102, 'id_submenu' => 211),

            array('id_role' => 201, 'id_submenu' => 121),
            array('id_role' => 201, 'id_submenu' => 122),
            array('id_role' => 201, 'id_submenu' => 123),
            array('id_role' => 201, 'id_submenu' => 131),
            array('id_role' => 201, 'id_submenu' => 132),
            array('id_role' => 201, 'id_submenu' => 211),
            array('id_role' => 201, 'id_submenu' => 221),

            array('id_role' => 202, 'id_submenu' => 121),
            array('id_role' => 202, 'id_submenu' => 122),
            array('id_role' => 202, 'id_submenu' => 123),
            array('id_role' => 202, 'id_submenu' => 131),
            array('id_role' => 202, 'id_submenu' => 132),
            array('id_role' => 202, 'id_submenu' => 211),
            array('id_role' => 202, 'id_submenu' => 221),

            array('id_role' => 203, 'id_submenu' => 121),
            array('id_role' => 203, 'id_submenu' => 122),
            array('id_role' => 203, 'id_submenu' => 123),
            array('id_role' => 203, 'id_submenu' => 131),
            array('id_role' => 203, 'id_submenu' => 211),
            array('id_role' => 203, 'id_submenu' => 221),

            array('id_role' => 301, 'id_submenu' => 121),
            array('id_role' => 301, 'id_submenu' => 122),
            array('id_role' => 301, 'id_submenu' => 123),
            array('id_role' => 301, 'id_submenu' => 131),
            array('id_role' => 301, 'id_submenu' => 211),
            array('id_role' => 301, 'id_submenu' => 221),

        );
        $this->db->table('menu_access')->insertBatch($access);
    }
}
