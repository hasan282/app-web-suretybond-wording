<?php

namespace App\Controllers;

class Insurance extends BaseController
{
    public function index()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Asuransi';
        $this->plugin->setup('scrollbar');
        $this->view('insurance/index', $data);

        // $id = create_id(0, true);
        // var_dump(array(
        //     'id' => $id,
        //     'hash' => sha3hash($id, 40)
        // ));
    }

    public function dataCabang($enkrip)
    {
        $asuransi = new \App\Models\InsuranceModel;
        $data = $asuransi->getData(['cabang_enkrip', 'cabang', 'alamat'])->where(
            ['enkrip' => $enkrip, 'active_cabang' => 1]
        )->order('cabang')->data();
        if (empty($data)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {
            return $this->response->setJSON($data);
        }
    }

    public function dataPeople($enkrip)
    {
        $asuransi = new \App\Models\InsuranceModel;
        $data = $asuransi->getPeople(['enkrip', 'nama', 'jabatan'], true)->where(
            ['enkrip_cabang' => $enkrip, 'active_people' => 1]
        )->order('asuransi_people.nama ASC')->data();
        if (empty($data)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {
            return $this->response->setJSON($data);
        }
    }
}
