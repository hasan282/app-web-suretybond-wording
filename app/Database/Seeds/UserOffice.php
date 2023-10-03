<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserOffice extends Seeder
{
    public function run()
    {
        require APPPATH . 'Database/Datas/office.php';
        helper('enkripsi');
        $data = array();
        foreach ($office as $off) {
            $data[] = array(
                'id' => $off['id'],
                'enkripsi' => sha3hash($off['id'], 40),
                'nama' => $off['nama'],
                'nickname' => $off['nickname'],
                'alamat' => $off['alamat'],
                'telpon' => $off['telpon'],
                'id_tipe' => $off['id_tipe'],
                'actives' => 1
            );
        }
        $this->db->table('user_office')->insertBatch($data);
    }
}
