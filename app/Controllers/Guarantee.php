<?php

namespace App\Controllers;

class Guarantee extends BaseController
{
    public function index()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Data Jaminan';
        $data['jscript'] = 'all/tables';
        $this->plugin->setup('scrollbar');
        return $this->view('guarantee/index', $data, true);
    }

    public function detail($param)
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Detail Jaminan';
        $data['bread'] = array('Data Jaminan|guarantee', 'Detail');
        $this->plugin->setup('scrollbar');
        $this->view('guarantee/detail', $data);
    }

    public function add_phase1()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Tambah Data Jaminan';
        $data['jscript'] = 'guarantee/add';
        $data['bread'] = array('Jaminan|guarantee', 'Tambah Baru');
        $this->plugin->setup('scrollbar');
        $this->view('guarantee/add/phase1', $data);
    }

    public function phase1_process()
    {
        if (!is_login())
            return login_page(full_url(false));
        $validateRules = array(
            'principal_people' => 'required',
            'asuransi_pejabat' => 'required'
        );
        if (!$this->validate($validateRules)) {
            $this->session->setFlashdata('validate_error', validation_errors());
            return redirect()->to(full_url(false));
        }
        $principal = new \App\Models\PrincipalModel;
        $asuransi = new \App\Models\InsuranceModel;
        $peoplePrincipal = $principal->getPeople(['id'])->where(
            ['enkrip_people' => $this->request->getPost('principal_people')]
        )->data(false);
        $peopleAsuransi = $asuransi->getPeople(['id'])->where(
            ['enkrip_people' => $this->request->getPost('asuransi_pejabat')]
        )->data(false);
        $dataJaminan = false;
        if ($peoplePrincipal !== null && $peopleAsuransi !== null) {
            $jaminan = new \App\Models\JaminanModel;
            $dataJaminan = $jaminan->addNew($peoplePrincipal['id'], $peopleAsuransi['id']);
        }
        if ($dataJaminan === false) {
            echo 'FAILED';
        } else {
            return redirect()->to('guarantee/add/' . $dataJaminan['enkripsi']);
        }
    }

    public function add_phase2($param)
    {
        if (!is_login())
            return login_page(full_url(false));
        $jaminan = new \App\Models\JaminanModel;
        $data['jaminan'] = $jaminan->getData()->where(
            ['enkrip' => $param]
        )->data(false);
        if ($data['jaminan'] === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {
            $data['title'] = 'Lengkapi Data Jaminan';
            $data['bread'] = array('Jaminan|guarantee', 'Lengkapi Data');
            $this->plugin->setup('scrollbar');
            $this->view('guarantee/add/phase2', $data);
        }
    }

    public function print($param)
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Cetak Jaminan';
        $data['bread'] = array('Jaminan|guarantee', 'Detail|guarantee/detail', 'Cetak');
        $this->plugin->setup('scrollbar|jspdf');
        $this->view('guarantee/print/index', $data);
    }

    public function table($section, $page)
    {
        $functions = array(
            'draft' => 'guaranteeDraft',
            'issued' => 'guaranteeIssued'
        );
        if (in_array($section, array_keys($functions))) {
            $tables = new \App\Libraries\Tables;
            return $this->response->setJSON($tables->{$functions[$section]}($page));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
