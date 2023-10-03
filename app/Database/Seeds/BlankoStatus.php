<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BlankoStatus extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                'id' => 1,
                'status' => 'Tersedia',
                'color' => 'primary'
            ),
            array(
                'id' => 2,
                'status' => 'Sudah Terpakai',
                'color' => 'success'
            ),
            array(
                'id' => 3,
                'status' => 'Rusak',
                'color' => 'danger'
            ),
            array(
                'id' => 4,
                'status' => 'Direvisi',
                'color' => 'secondary'
            ),
            array(
                'id' => 5,
                'status' => 'Akan Dipakai',
                'color' => 'info'
            )
        );
        $this->db->table('blanko_status')->insertBatch($data);
    }
}
