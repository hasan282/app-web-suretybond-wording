<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LogTipe extends Seeder
{
    public function run()
    {
        $logTipe = array(

            array('id' => 101, 'tipe' => 'User Login'),

            array('id' => 211, 'tipe' => 'Add New Jaminan'),
            array('id' => 212, 'tipe' => 'Edit Jaminan'),
            array('id' => 213, 'tipe' => 'Delete Jaminan'),

            array('id' => 221, 'tipe' => 'Add Print Profile'),
            array('id' => 222, 'tipe' => 'Edit Print Profile'),
            array('id' => 223, 'tipe' => 'Delete Print Profile'),
            array('id' => 224, 'tipe' => 'Set Profile')

        );
        $this->db->table('log_tipe')->insertBatch($logTipe);
    }
}
