<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Asuransi extends Seeder
{
    public function run()
    {
        $asuransi = array(
            array(
                'id' => '221002154456',
                'nama' => 'PT ASURANSI BINAGRIYA UPAKARA',
                'nickname' => 'BINAGRIYA',
                'deskripsi' => 'PT ASURANSI BINAGRIYA UPAKARA'
            ),
            array(
                'id' => '221005201325',
                'nama' => 'PT ASURANSI UMUM BUMIPUTERA MUDA',
                'nickname' => 'BUMIDA',
                'deskripsi' => 'PT ASURANSI UMUM BUMIPUTERA MUDA 1967'
            ),
            array(
                'id' => '221006103529',
                'nama' => 'PT ASURANSI MAXIMUS GRAHA PERSADA',
                'nickname' => 'MAXIMUS',
                'deskripsi' => 'PT ASURANSI MAXIMUS GRAHA PERSADA Tbk'
            )
        );
        $data = $this->_asuransi($asuransi);
        $this->db->table('asuransi')->insertBatch($data);
    }

    private function _asuransi(array $data): array
    {
        helper('enkripsi');
        $asuransi = array();
        foreach ($data as $dt) {
            $asuransi[] = array(
                'id' => $dt['id'],
                'enkripsi' => sha3hash($dt['id'], 40),
                'nama' => $dt['nama'],
                'nickname' => $dt['nickname'],
                'deskripsi' => $dt['deskripsi'],
                'actives' => 1
            );
        }
        return $asuransi;
    }
}
