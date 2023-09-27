<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JaminanNumber extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 101,
                'conditions' => '',
                'templates' => 'PSP10441101',
                'registers' => 'number=-4',
                'wording' => 'BUMIDA_BB_1',
                'actives' => 1
            )
        );
    }
}
