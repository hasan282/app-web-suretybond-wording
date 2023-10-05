<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Currency extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                'nama' => 'Rupiah',
                'codename' => 'IDR',
                'symbol' => 'Rp'
            ),
            array(
                'nama' => 'US Dollar',
                'codename' => 'USD',
                'symbol' => '$'
            ),
            array(
                'nama' => 'Euro',
                'codename' => 'EUR',
                'symbol' => '€'
            )
        );
        $this->db->table('currency')->insertBatch($data);
    }
}
