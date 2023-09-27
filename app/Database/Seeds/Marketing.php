<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Marketing extends Seeder
{
    public function run()
    {
        $marketing = array(
            array(
                'id' => '230201125148',
                'nama' => 'ROCHMAN'
            ),
            array(
                'id' => '230426140232',
                'nama' => 'HILMAN'
            ),
            array(
                'id' => '230405051206',
                'nama' => 'ICHSAN'
            ),
            array(
                'id' => '230330192332',
                'nama' => 'YANDI'
            ),
            array(
                'id' => '230302235138',
                'nama' => 'DEWI'
            ),
            array(
                'id' => '230315031535',
                'nama' => 'INDRA'
            ),
            array(
                'id' => '230505133926',
                'nama' => 'ANAS'
            ),
            array(
                'id' => '230522124220',
                'nama' => 'LUKMAN'
            ),
            array(
                'id' => '230209115907',
                'nama' => 'MARTHIN'
            )
        );
        $data = $this->_marketing($marketing);
        $this->db->table('marketing')->insertBatch($data);
    }

    private function _marketing(array $data): array
    {
        helper('enkripsi');
        $marketing = array();
        foreach ($data as $dt) {
            $marketing[] = array(
                'id' => $dt['id'],
                'enkripsi' => sha3hash($dt['id'], 40),
                'nama' => $dt['nama'],
                'actives' => 1
            );
        }
        return $marketing;
    }
}
