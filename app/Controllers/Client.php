<?php

namespace App\Controllers;

class Client extends BaseController
{
    public function index()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Data Principal';
        $data['jscript'] = array('all/tables', 'client/main');
        $this->plugin->setup('scrollbar|toastr');
        return $this->view('client/index', $data, true);
    }

    public function add()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Tambah Data Principal';
        $data['bread'] = array('Principal|client', 'Tambah Data');
        $this->plugin->setup('scrollbar|icheck|dateinput');
        return $this->view('client/add/index', $data, true);
    }

    public function detail($param)
    {
        if (!is_login())
            return login_page(full_url(false));
        $principal = new \App\Models\PrincipalModel;
        $data['principal'] = $principal->getData(array(
            'id', 'enkrip', 'principal', 'telpon', 'email', 'alamat'
        ), false)->where(array('enkrip' => $param))->data(false);
        if ($data['principal'] === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {
            $data['title'] = 'Detail Principal';
            $data['bread'] = array('Principal|client', 'Detail');
            $this->plugin->setup('scrollbar|dropzone|sweetalert');
            return $this->view('client/detail/index', $data, true);
        }
    }

    public function edit_info($param)
    {
        if (!is_login())
            return login_page(full_url(false));
        $principal = new \App\Models\PrincipalModel;
        $data['principal'] = $principal->getData(array(
            'enkrip', 'principal', 'telpon', 'email', 'alamat'
        ), false)->where(array('enkrip' => $param))->data(false);
        if ($data['principal'] === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {
            $detail_url = 'client/detail/' . $data['principal']['enkrip'];
            $data['title'] = 'Edit Informasi Principal';
            $data['bread'] = array('Principal|client', 'Detail|' . $detail_url, 'Edit Informasi');
            $this->plugin->setup('scrollbar|dropzone');
            return $this->view('client/detail/edit_info', $data, true);
        }
    }

    // -------- PROCESS -----------------------------------------------------------------

    public function addNew()
    {
        if (!is_login())
            return login_page(full_url(false));
        $validateRules = array(
            'principal' => 'required',
            'alamat' => 'required',
            'pejabat' => 'required',
            'jabatan' => 'required'
        );
        if (!$this->validate($validateRules))
            return $this->add();
        $data = $this->request->getPost();
        $principal = new \App\Models\PrincipalModel;
        $dataClient = $principal->addNew($data, userdata('office_id'));
        if ($dataClient === false) {
            echo 'FAILED';
        } else {
            $this->session->setFlashdata('message', array(
                'type' => 'success',
                'text' => 'Data ' . $dataClient['nama'] . ' telah ditambahkan'
            ));
            $direct = $this->request->getPost(
                'continues'
            ) == 'on' ? 'guarantee/add?client=' . $dataClient['enkripsi'] : 'client';
            return redirect()->to($direct);
        }
    }

    public function uploadFile()
    {
        $enkrip = $this->request->getGet('pr');
        $principalModel = new \App\Models\PrincipalModel;
        if ($enkrip === null) {
            $principal = null;
        } else {
            $pData = $principalModel->getData(['id'])->where(['enkrip' => $enkrip])->data(false);
            $principal = $pData['id'];
        }
        $data['token'] = csrf_hash();
        $validateRules = array(
            'file' => 'uploaded[file]|max_size[file,52048]|ext_in[file,jpeg,jpg,png,pdf]'
        );
        if (!$this->validate($validateRules) || $principal === null) {
            $data['success'] = 0;
            $data['message'] = 'upload ditolak';
        } else {
            if ($file = $this->request->getFile('file')) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $dirname = UPLOAD_PATH . $principal;
                    if (!is_dir($dirname)) mkdir($dirname);
                    $file->move($dirname, $newName);
                    if ($principalModel->refresh()->addDocument($principal, $newName) === false) {
                        $data['success'] = 0;
                        $data['message'] = 'terjadi kesalahan data';
                    } else {
                        $data['success'] = 1;
                        $data['message'] = 'berhasil upload';
                    }
                } else {
                    $data['success'] = 2;
                    $data['message'] = 'file tidak terupload';
                }
            } else {
                $data['success'] = 2;
                $data['message'] = 'file tidak terupload';
            }
        }
        return $this->response->setJSON($data);
    }

    public function editInfo($param)
    {
        $data = array(
            'telpon' => nl2space($this->request->getPost('telpon'), false),
            'email' => strtolower(nl2space($this->request->getPost('email'), false)),
            'alamat' => nl2space($this->request->getPost('alamat'))
        );
        if ($data['alamat'] == '') return $this->edit_info($param);
        foreach ($data as $key => $val) if ($val == '') $data[$key] = null;
        $principal = new \App\Models\PrincipalData;
        $result = $principal->editRow($param, $data);
        if ($result === false) {
            // failed or invalid param
        } else {
            // result 1 is success, 0 is failed edit
        }
        return redirect()->to('client/detail/' . $param);
    }

    public function addPeople($param)
    {
        $principal = new \App\Models\PrincipalModel;
        $principalData = $principal->getData(['id'], false)->where(
            ['enkrip' => $param]
        )->data(false);
        if ($principalData === null) {
            // invalid principal param
        } else {
            $result = $principal->addPeople(
                $principalData['id'],
                $this->request->getPost()
            );
            if ($result === false) {
                // insert failed
            } else {
                // insert success
            }
        }
        return redirect()->to('client/detail/' . $param);
    }

    public function deletePeople($param)
    {
        $model = new \App\Models\PrincipalModel;
        $peopleData = $model->getList(
            ['enkrip', 'people_id', 'people_nama']
        )->where(['enkrip_people' => $param])->data(false);
        if ($peopleData === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {
            $update = $model->transaction(function ($db) use ($peopleData) {
                $db->table('principal_people')->update(
                    array('actives' => 0),
                    ['id' => $peopleData['people_id']]
                );
            });
            if ($update) {
                // update success
            } else {
                // update failed
            }
            return redirect()->to('client/detail/' . $peopleData['enkrip']);
        }
    }

    // -------- JSON Return -------------------------------------------------------------

    public function table($pageNumber)
    {
        $page = intval($pageNumber);
        if (is_login() && $page > 0) {
            $table = new \App\Libraries\Tables;
            return $this->response->setJSON(
                $table->clientPrincipal($page)
            );
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function info($enkripsi)
    {
        $principal = new \App\Models\PrincipalModel;
        $data = $principal->getData(array(
            'id', 'enkrip', 'principal', 'telpon', 'email', 'alamat'
        ), false)->where(array('enkrip' => $enkripsi))->data(false);
        if ($data === null) {
            $views = view('table/empty');
        } else {
            $views = view('client/info', array('principal' => $data));
        }
        return $this->response->setJSON(array(
            'status' => true,
            'content' => nl2space($views)
        ));
    }

    public function people($principalID)
    {
        $principal = new \App\Models\PrincipalModel;
        $data = $principal->getData(['id'])->where(
            array('enkrip' => $principalID)
        )->data(false);
        if ($data === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {
            $principal = new \App\Models\PrincipalModel;
            $people = $principal->getPeople(
                ['enkrip', 'nama', 'jabatan']
            )->where(
                ['id_principal' => $data['id']]
            )->data();
            return $this->response->setJSON($people);
        }
    }
}
