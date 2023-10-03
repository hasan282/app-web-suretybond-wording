<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserRole extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                'id' => 101,
                'role' => 'Master Administrator'
            ),
            array(
                'id' => 102,
                'role' => 'Administrator'
            ),
            array(
                'id' => 201,
                'role' => 'Head Office Manager'
            ),
            array(
                'id' => 202,
                'role' => 'Head Office Supervisor'
            ),
            array(
                'id' => 203,
                'role' => 'Head Office User'
            ),
            array(
                'id' => 301,
                'role' => 'Branch User'
            )
        );
        $this->db->table('user_role')->insertBatch($data);
    }
}
