<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Marketing extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                'id' => '230201125148',
                'enkripsi' => 'a31bc5a251f71cee45788fc9c83bcbed3fe5a3d0',
                'nama' => 'ROCHMAN',
                'actives' => 1
            ),
            array(
                'id' => '230426140232',
                'enkripsi' => 'bd441a4fb130c539003c7604031d0f9c3a96650c',
                'nama' => 'HILMAN',
                'actives' => 1
            ),
            array(
                'id' => '230405051206',
                'enkripsi' => '58e9fb7aac5703841954f934932333624c70551d',
                'nama' => 'ICHSAN',
                'actives' => 1
            ),
            array(
                'id' => '230330192332',
                'enkripsi' => '3ba71e799d92c301525bd4e408eb83946e34103a',
                'nama' => 'YANDI',
                'actives' => 1
            ),
            array(
                'id' => '230302235138',
                'enkripsi' => '3a2b85464c8bb0a9614252e93eb6a862a0bfce35',
                'nama' => 'DEWI',
                'actives' => 1
            ),
            array(
                'id' => '230315031535',
                'enkripsi' => 'd087a8d8bc8086267c4f0e2aaf2a0f4cf7f894ee',
                'nama' => 'INDRA',
                'actives' => 1
            ),
            array(
                'id' => '230505133926',
                'enkripsi' => 'a4cd0aac959db4e5c922a580d6c804cf1fef4209',
                'nama' => 'ANAS',
                'actives' => 1
            ),
            array(
                'id' => '230522124220',
                'enkripsi' => '56b3f837e2cd024ac94d15cefc418a7fc00fdedf',
                'nama' => 'LUKMAN',
                'actives' => 1
            ),
            array(
                'id' => '230209115907',
                'enkripsi' => '5284b9c2c01ec4f330ac0f10ae66bf697e9171a7',
                'nama' => 'MARTHIN',
                'actives' => 1
            )
        );
        $this->db->table('marketing')->insertBatch($data);
    }
}
