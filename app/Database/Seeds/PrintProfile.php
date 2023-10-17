<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PrintProfile extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                'profile' => 'MAXIMUS-BOGOR-DEFAULT',
                'paper' => 'LEGAL',
                'page_top' => 62,
                'page_left' => 28,
                'page_right' => 26,
                'page_bottom' => 5,
                'spacing' => 100,
                'sign_margin' => 20,
                'sign_width' => 70,
                'sign_height' => 31,
                'sign_space' => 8,
                'actives' => 1
            ),
            array(
                'profile' => 'BUMIDA-DEFAULT',
                'paper' => 'A4',
                'page_top' => 35,
                'page_left' => 17,
                'page_right' => 16,
                'page_bottom' => 5,
                'spacing' => 100,
                'sign_margin' => 52,
                'sign_width' => 55,
                'sign_height' => 28,
                'sign_space' => 3,
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
