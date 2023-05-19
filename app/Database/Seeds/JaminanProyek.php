<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JaminanProyek extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                'id' => 101,
                'proyek' => 'Proyek Pemerintah'
            ),
            array(
                'id' => 102,
                'proyek' => 'Proyek Swasta'
            )
        );
        $this->db->table('jaminan_proyek')->insertBatch($data);
    }
}
