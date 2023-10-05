<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserData extends Seeder
{
    public function run()
    {
        $this->call('Users');
        $this->call('UserOffice');
    }
}
