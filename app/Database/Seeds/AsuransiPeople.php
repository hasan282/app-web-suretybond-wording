<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AsuransiPeople extends Seeder
{
    public function run()
    {
        $data = array(
            // MAXIMUS - BOGOR
            array(
                'id' => '2305041546102322',
                'enkripsi' => '09f9f76f095423b696e37556128c408787901eb3',
                'id_cabang' => '2305041504511821',
                'nama' => 'Ricky Firmansyah',
                'jabatan' => 'Branch Manager',
                'actives' => 1
            ),
            // MAXIMUS - JAKARTA
            array(
                'id' => '2305041554379891',
                'enkripsi' => 'c8c12ff316f8e81a7a4e0c4a3c2d72dc1c570cb6',
                'id_cabang' => '2305041509199598',
                'nama' => 'Ricky Firmansyah',
                'jabatan' => 'Branch Manager',
                'actives' => 1
            ),
            // BINAGRIYA - BINTARO
            array(
                'id' => '2305050857082692',
                'enkripsi' => '9d7cfdd8632ef721e1e6b041e6fec26389c2e3fe',
                'id_cabang' => '2305041517287910',
                'nama' => 'Arizal Junidarta',
                'jabatan' => 'Kepala Cabang',
                'actives' => 1
            ),
            // BINAGRIYA - JAKARTA - WISMA
            array(
                'id' => '2305050858089849',
                'enkripsi' => 'ebe3910caac4fb05d643d04f243164affba8cbdb',
                'id_cabang' => '2305041525528816',
                'nama' => 'Alim Hidayat',
                'jabatan' => 'Kepala Cabang',
                'actives' => 1
            ),
            // BINAGRIYA - JAKARTA - TANAHABANG
            array(
                'id' => '2306151543343059',
                'enkripsi' => '7120cc5350b0ffdf1652cbb5d8a6c31479327221',
                'id_cabang' => '2306151540477892',
                'nama' => 'Arizal Junidarta',
                'jabatan' => 'Kepala Cabang',
                'actives' => 1
            ),
            // BUMIDA
            array(
                'id' => '2305050907163410',
                'enkripsi' => 'd3a41035924d44f4687f2b84cbc9d9d1e6b83a44',
                'id_cabang' => '2305041529071588',
                'nama' => 'Jatmiko JP',
                'jabatan' => 'Kepala Cabang',
                'actives' => 1
            ),
        );
        $this->db->table('asuransi_people')->insertBatch($data);
    }
}
