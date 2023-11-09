<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AllSeeder extends Seeder
{
    public function run()
    {
        $this->call('Asuransi');
        $this->call('AsuransiCabang');
        $this->call('AsuransiPeople');
        $this->call('BlankoStatus');
        $this->call('Currency');
        $this->call('JaminanJenis');
        $this->call('JaminanNumber');
        $this->call('JaminanPekerjaan');
        $this->call('JaminanProyek');
        $this->call('LogTipe');
        $this->call('Marketing');
        $this->call('Menu');
        $this->call('MenuAccess');
        $this->call('MenuSubs');
        $this->call('PrintProfile');
        $this->call('UserImage');
        $this->call('UserRole');
    }
}
