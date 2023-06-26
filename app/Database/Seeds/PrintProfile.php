<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PrintProfile extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                'profile' => 'MAXIMUS-DEFAULT',
                'paper' => 'LEGAL',
                'page_top' => 62,
                'page_left' => 24,
                'page_right' => 22,
                'page_bottom' => 5,
                'spacing' => 100,
                'sign_margin' => 30,
                'sign_width' => 70,
                'sign_height' => 24,
                'sign_space' => 18,
                'actives' => 1
            )
        );
        $this->_running($data);
    }

    private function _running(array $profiledata)
    {
        $data = array();
        helper(['format', 'enkripsi']);
        foreach ($profiledata as $pd) {
            $id = create_id(4, true);
            $enkrip = sha3hash($id, 40);
            $dts = $pd;
            $dts['id'] = $id;
            $dts['enkripsi'] = $enkrip;
            $data[] = $dts;
        }
        $this->db->table('print_profile')->insertBatch($data);
    }
}
