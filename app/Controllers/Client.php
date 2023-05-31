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
        $this->plugin->setup('scrollbar');
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
            $this->plugin->setup('scrollbar|dropzone');
            return $this->view('client/detail/index', $data, true);
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
                    $dirname = '../public/files/' . $principal;
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
