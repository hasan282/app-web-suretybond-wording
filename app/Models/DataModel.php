<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    public function dataJaminan()
    {
        $data = array();

        for ($i = 0; $i < 10; $i++) {
            $push['nomor'] = '23.08.02.' . mt_rand(1000, 9000) . '.DRAFT';
            $jenis = array('Pemeliharaan', 'Uang Muka', 'Pelaksanaan', 'Penawaran');
            $push['jenis'] = 'Jaminan ' . $jenis[array_rand($jenis)];
            $push['principal'] = 'PT. FIBERHOME TECHNOLOGIES INDONESIA';
            $push['nilai'] = mt_rand(400000, 955555) . '00';

            array_push($data, $push);
        }

        return $data;
    }
}
