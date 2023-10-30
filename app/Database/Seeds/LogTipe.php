<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LogTipe extends Seeder
{
    public function run()
    {
        $logTipe = array(
            array(
                'id' => 101,
                'tipe' => 'User Login'
            ),
            array(
                'id' => 211,
                'tipe' => 'Add New Jaminan'
            ),
            array(
                'id' => 212,
                'tipe' => 'Edit Jaminan'
            ),
            array(
                'id' => 213,
                'tipe' => 'Delete Jaminan'
            )
        );
        $this->db->table('log_tipe')->insertBatch($logTipe);
    }
}
