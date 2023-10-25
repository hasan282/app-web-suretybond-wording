<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Blanko extends Seeder
{
    public function run()
    {
        if ($this->_exists('blanko')) {
            $this->_insertAll();
            $this->_updateInsurance();
        }
    }

    private function _insertAll()
    {
        require APPPATH . 'Database/Datas/blanko.php';
        helper('enkripsi');
        $data = array();
        foreach ($blanko as $blnk) {
            $data[] = array(
                'id' => $blnk['id'],
                'enkripsi' => sha3hash($blnk['id'], 50),
                'prefix' => $blnk['prefix'],
                'nomor' => $blnk['nomor'],
                'id_cabang' => $blnk['id_asuransi'],
                'id_office' => $blnk['id_office'],
                'id_status' => $blnk['id_status'],
                'arrived' => $blnk['date_in']
            );
        }
        $this->db->table('blanko')->insertBatch($data);
    }

    private function _updateInsurance()
    {
        $this->db->transStart();
        // Maximus Bogor
        $this->db->table('blanko')->update(['id_cabang' => '2305041504511821'], ['id_cabang' => '221006103529']);
        // Bumida
        $this->db->table('blanko')->update(['id_cabang' => '2305041529071588'], ['id_cabang' => '221005201325']);
        // Binagriya Bintaro
        $this->db->table('blanko')->update(['id_cabang' => '2305041517287910'], ['id_cabang' => '221002154456']);
        // Binagriya Jakarta Tanah Abang
        $this->db->table('blanko')->update(['id_cabang' => '2306151540477892'], ['id_cabang' => '221002154557']);
        $this->db->transComplete();
    }

    private function _exists(string $file): bool
    {
        return file_exists(APPPATH . 'Database/Datas/' . $file . '.php');
    }
}
