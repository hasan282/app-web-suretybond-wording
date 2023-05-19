<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Currency extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                'id' => 1,
                'nama' => 'Rupiah',
                'symbol_1' => 'IDR',
                'symbol_2' => 'Rp'
            ),
            array(
                'id' => 2,
                'nama' => 'US Dollar',
                'symbol_1' => 'USD',
                'symbol_2' => '$'
            ),
            array(
                'id' => 3,
                'nama' => 'Euro',
                'symbol_1' => 'EUR',
                'symbol_2' => '€'
            ),
        );
        $this->db->table('currency')->insertBatch($data);
    }
}
