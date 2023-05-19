<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JaminanJenis extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                'id' => 101,
                'jenis' => 'Jaminan Penawaran',
                'jenis_eng' => 'Bid Bond',
                'singkat' => 'BB',
                'actives' => 1
            ),
            array(
                'id' => 102,
                'jenis' => 'Jaminan Pelaksanaan',
                'jenis_eng' => 'Performance Bond',
                'singkat' => 'PB',
                'actives' => 1
            ),
            array(
                'id' => 103,
                'jenis' => 'Jaminan Uang Muka',
                'jenis_eng' => 'Advance Payment Bond',
                'singkat' => 'APB',
                'actives' => 1
            ),
            array(
                'id' => 104,
                'jenis' => 'Jaminan Pemeliharaan',
                'jenis_eng' => 'Maintenance Bond',
                'singkat' => 'MB',
                'actives' => 1
            ),
        );
        $this->db->table('jaminan_jenis')->insertBatch($data);
    }
}
