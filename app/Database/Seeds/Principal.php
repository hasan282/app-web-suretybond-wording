<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Principal extends Seeder
{
    public function run()
    {
        if (
            $this->_exists('principal') &&
            $this->_exists('principal_people') &&
            $this->_exists('principal_rate')
        ) {
            $this->_principals();
            $this->_peoples();
            $this->_rates();
        }
    }

    private function _principals()
    {
        require APPPATH . 'Database/Datas/principal.php';
        $this->db->table('principal')->insertBatch($principal);
    }

    private function _peoples()
    {
        require APPPATH . 'Database/Datas/principal_people.php';
        $this->db->table('principal_people')->insertBatch($principal_people);
    }

    private function _rates()
    {
        require APPPATH . 'Database/Datas/principal_rate.php';
        $data = array();
        foreach ($principal_rate as $pr) {
            $data[] = array(
                'id_principal' => $pr['id_principal'],
                'id_asuransi' => $pr['id_asuransi'],
                'id_jenis' => $pr['id_jenis'],
                'id_proyek' => $pr['id_proyek'],
                'rate_percent' => $pr['rate_percent'],
                'minimum' => $pr['minimum'],
                'admin_fee' => $pr['admin_fee']
            );
        }
        $this->db->table('principal_rate')->insertBatch($data);
    }

    private function _exists(string $file): bool
    {
        return file_exists(APPPATH . 'Database/Datas/' . $file . '.php');
    }
}
