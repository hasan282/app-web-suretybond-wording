<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Asuransi extends Seeder
{
    public function run()
    {
        $data = array(
            array(
                'id' => '221002154456',
                'enkripsi' => 'a4d49c167df128f03cd8e44c63894c2f9dcebd4c',
                'nama' => 'PT ASURANSI BINAGRIYA UPAKARA',
                'nickname' => 'BINAGRIYA',
                'deskripsi' => 'PT ASURANSI BINAGRIYA UPAKARA',
                'actives' => 1
            ),
            array(
                'id' => '221005201325',
                'enkripsi' => '361dccd285e86f35b194d704a5fe1ffbc39f7b95',
                'nama' => 'PT ASURANSI UMUM BUMIPUTERA MUDA',
                'nickname' => 'BUMIDA',
                'deskripsi' => 'PT ASURANSI UMUM BUMIPUTERA MUDA 1967',
                'actives' => 1
            ),
            array(
                'id' => '221006103529',
                'enkripsi' => '368044704c51364604e4f2b9e976238cd30bb3ca',
                'nama' => 'PT ASURANSI MAXIMUS GRAHA PERSADA',
                'nickname' => 'MAXIMUS',
                'deskripsi' => 'PT ASURANSI MAXIMUS GRAHA PERSADA Tbk',
                'actives' => 1
            )
        );
        $this->db->table('asuransi')->insertBatch($data);
    }
}
