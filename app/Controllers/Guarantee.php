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
        $this->plugin->setup('scrollbar|sweetalert');
        return $this->view('guarantee/index', $data, true);
    }

    public function detail($param)
    {
        if (!is_login())
            return login_page(full_url(false));
        $jaminan = new \App\Models\JaminanData;
        $data['jaminan'] = $jaminan->getDetail($param);
        if ($data['jaminan'] === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {
            $printed = intval($data['jaminan']['printed']) === 1;
            $data['title'] = 'Detail Jaminan';
            $data['bread'] = array(
                'Data Jaminan|guarantee' . ($printed ? '/issued' : ''),
                'Detail'
            );
            $this->plugin->setup('scrollbar|sweetalert');
            return $this->view(
                'guarantee/detail/' . ($printed ? 'printed' : 'draft'),
                $data,
                true
            );
        }
    }

    public function print($param)
    {
        if (!is_login())
            return login_page(full_url(false));
        $jaminan = new \App\Models\JaminanData;
        $data['jaminan'] = $jaminan->dataPrint($param);
        if ($data['jaminan'] === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {
            $data['title'] = 'Cetak Jaminan';
            $data['bread'] = array(
                'Jaminan|guarantee',
                'Detail|guarantee/detail/' . $param,
                'Cetak'
            );
            $data['params'] = $param;
            $data['jscript'] = 'guarantee/print';
            $this->plugin->setup('scrollbar|pdfmake|sweetalert');
            return $this->view('guarantee/print/index', $data, true);
        }
    }

    public function add_phase1()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Tambah Data Jaminan';
        $data['jscript'] = 'guarantee/add';
        $data['bread'] = array('Jaminan|guarantee', 'Tambah Baru');
        $this->plugin->setup('scrollbar|select2');
        $this->view('guarantee/add/phase1', $data);
    }

    public function add_phase2($param)
    {
        if (!is_login())
            return login_page(full_url(false));
        $jaminan = new \App\Models\JaminanData;
        $data['jaminan'] = $jaminan->dataInput($param);
        if ($data['jaminan'] === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {
            $data['title'] = 'Lengkapi Data Jaminan';
            $data['bread'] = array('Jaminan|guarantee', 'Lengkapi Data');
            $data['jscript'] = 'all/input';
            $this->plugin->setup('scrollbar|dateinput');
            $this->view('guarantee/add/phase2', $data);
        }
    }

    // -------- PROCESS -----------------------------------------------------------------

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

    public function phase2_process($param)
    {
        if (!is_login())
            return login_page(full_url(false));
        $jaminan = new \App\Models\JaminanData;
        $jaminan->rowEdit($param);
        $update = $jaminan->rowEdit($param);
        if ($update === false) {
            // failed or false
        } else {
            if (empty($update)) {
                // no update
            } else {
                // update success
            }
        }
        return redirect()->to('guarantee/detail/' . $param);
    }

    public function settings($param)
    {
        if (!is_login())
            return login_page(full_url(false));
        $jaminan = new \App\Models\JaminanModel;
        $jaminanData = $jaminan->getData(['id'])->where(
            ['enkrip' => $param]
        )->data(false);
        if ($jaminanData !== null) {
            $profileModel = new \App\Models\ProfileModel;
            $result = $profileModel->addNew($this->request->getPost(), $jaminanData['id']);
            if ($result) {
                // success
            } else {
                // failed
            }
        }
        return redirect()->to('guarantee/print/' . $param);
    }

    public function editSetting()
    {
        if (!is_login())
            return login_page(full_url(false));
        $model = new \App\Models\ProfileModel;
        $enkriprofile = $this->request->getPost('enkriprofile');
        $profile = $model->getTable()->where([
            'enkrip' => $enkriprofile
        ])->data(false);
        if ($profile !== null) {
            $change = array();
            unset($profile['id']);
            unset($profile['enkripsi']);
            unset($profile['actives']);
            $profilename = $this->request->getPost('profile_name');
            if ($profile['profile'] != $profilename)
                $change['profile'] = $profilename;
            unset($profile['profile']);
            foreach ($profile as $key => $val) {
                $postval = $this->request->getPost($key);
                if ($val != $postval) $change[$key] = $postval;
            }
            if (!empty($change)) {
                $model->transaction(function ($db) use ($change, $enkriprofile) {
                    $db->table('print_profile')->update($change, ['enkripsi' => $enkriprofile]);
                });
            }
        }
        return redirect()->to('guarantee/print/' . $this->request->getPost('urihash'));
    }

    public function applySetting()
    {
        if (!is_login())
            return login_page(full_url(false));
        $valJaminan = $this->request->getPost('jaminan');
        $valPeofile = $this->request->getPost('profile');
        $jaminan = new \App\Models\JaminanModel;
        $jaminanData = $jaminan->getData(['id'])->where(
            ['enkrip' => $valJaminan]
        )->data(false);
        $profile = new \App\Models\ProfileModel;
        $profileData = $profile->getData(['id'])->where(
            ['enkrip' => $valPeofile]
        )->data(false);
        if ($profile->refresh()->applyProfile($jaminanData['id'], $profileData['id'])) {
            // success
        } else {
            // failed
        }
        return redirect()->to('guarantee/print/' . $valJaminan);
    }

    public function blankoUse()
    {
        $params = $this->request->getPost('jaminan');
        $model = new \App\Models\JaminanData;
        $result = $model->blankoUse($params);
        if ($result === false) {
            // process denied
            return redirect()->to('guarantee/print/' . $params);
        } else {
            if ($result['update']) {
                // all success
            } else {
                // update failed
            }
            return redirect()->to('guarantee/detail/' . $params);
        }
    }

    public function blankoCrash()
    {
        $params = $this->request->getPost('jaminan');
        $model = new \App\Models\JaminanData;
        $result = $model->blankoCrash($params);
        if ($result === false) {
            // process denied
        } else {
            if (!$result['update']) {
                // update failed
            }
            if (empty($result['api_new'])) {
                // empty blanko
            }
        }
        return redirect()->to('guarantee/print/' . $params);
    }

    // -------- JSON Return -------------------------------------------------------------

    public function table($section, $pagenumber)
    {
        $page = intval($pagenumber);
        $functions = array(
            'draft' => 'guaranteeDraft',
            'issued' => 'guaranteeIssued'
        );
        if (in_array($section, array_keys($functions)) && $page > 0) {
            $tables = new \App\Libraries\Tables;
            return $this->response->setJSON($tables->{$functions[$section]}($page));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
