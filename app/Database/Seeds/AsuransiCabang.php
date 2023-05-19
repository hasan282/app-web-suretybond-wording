<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AsuransiCabang extends Seeder
{
    public function run()
    {
        $data = array(
            // MAXIMUS - BOGOR
            array(
                'id' => '2305041504511821',
                'enkripsi' => '04e2e8aaeea51ad21158c661e59481baabb7a718',
                'id_asuransi' => '221006103529',
                'cabang' => 'BOGOR',
                'alamat' => 'Ruko VIP No. 88 B, Jl. Raya Pajajaran, Bogor 16128',
                'deskripsi' => 'KANTOR CABANG BOGOR',
                'actives' => 1
            ),
            // MAXIMUS - JAKARTA
            array(
                'id' => '2305041509199598',
                'enkripsi' => '73f29a15d9daf2909c455df1b89b4846b102616a',
                'id_asuransi' => '221006103529',
                'cabang' => 'JAKARTA',
                'alamat' => 'Gedung Graha Kirana Lt.6, Jl. Yos Sudarso 88, Sunter, Jakarta 14350',
                'deskripsi' => null,
                'actives' => 1
            ),
            // BINAGRIYA - BINTARO
            array(
                'id' => '2305041517287910',
                'enkripsi' => '5f865d89fcf0b45fc762bb725786ccd575440256',
                'id_asuransi' => '221002154456',
                'cabang' => 'BINTARO',
                'alamat' => 'Jl. R.C. Veteran No. 11 A, Bintaro, Jakarta Selatan 12330',
                'deskripsi' => 'CABANG BINTARO',
                'actives' => 1
            ),
            // BINAGRIYA - JAKARTA
            array(
                'id' => '2305041525528816',
                'enkripsi' => '09d82f0be6aec2d9f986866c12947783ba486809',
                'id_asuransi' => '221002154456',
                'cabang' => 'JAKARTA',
                'alamat' => 'Wisma Purna Batara Lt. 4-6, Jl. Kesehatan No. 56-58, Tanah Abang, Jakarta 10160',
                'deskripsi' => 'CABANG JAKARTA',
                'actives' => 1
            ),
            // BUMIDA
            array(
                'id' => '2305041529071588',
                'enkripsi' => '999445dc354c62753e65396e57fe2109904c2f0d',
                'id_asuransi' => '221005201325',
                'cabang' => 'JAKARTA',
                'alamat' => 'Rukan Artha Niaga Blok G No. 6, Jl. Boulevard Artha Gading, Jakarta Utara 14240',
                'deskripsi' => null,
                'actives' => 1
            )
        );
        $this->db->table('asuransi_cabang')->insertBatch($data);
    }
}
