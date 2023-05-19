<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JaminanPekerjaan extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                'id' => 110,
                'pekerjaan' => 'Konstruksi',
                'actives' => 1
            ),
            array(
                'id' => 120,
                'pekerjaan' => 'Instalasi',
                'actives' => 1
            ),
            array(
                'id' => 130,
                'pekerjaan' => 'Supply',
                'actives' => 1
            ),
            array(
                'id' => 140,
                'pekerjaan' => 'Konsultan',
                'actives' => 1
            ),
            array(
                'id' => 200,
                'pekerjaan' => 'Lainnya',
                'actives' => 1
            )
        );
        $this->db->table('jaminan_pekerjaan')->insertBatch($data);
    }
}
