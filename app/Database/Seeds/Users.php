<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        require APPPATH . 'Database/Datas/user.php';
        helper('enkripsi');
        $data = array();
        foreach ($user as $usr) {
            $userdata = array(
                'id' => $usr['id'],
                'enkripsi' => sha3hash($usr['id'], 50),
                'username' => $usr['username'],
                'password' => sha3hash('jasmine', 40),
                'nama' => $usr['nama'],
                'id_image' => '2211210506015555',
                'id_office' => $usr['id_office'],
                'id_role' => $usr['id_access'] . '01',
                'actives' => 1
            );
            if ($usr['photo'] == 'user_default_female.jpg')
                $userdata['id_image'] = '2211210607028888';
            $data[] = $userdata;
        }
        $this->db->table('users')->insertBatch($data);
    }
}
