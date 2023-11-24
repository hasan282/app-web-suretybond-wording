<?php

namespace App\Controllers;

class Inforce extends BaseController
{
    public function index()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Inforce Jaminan';
        $data['jscript'] = ['all/tables', 'all/checklist'];
        $this->plugin->setup('scrollbar|icheck');
        // return $this->view('inforce/index', $data, true);
        return $this->view('layout/maintenance/index', $data, true);
    }

    public function newRequest($param)
    {
        if (!is_login())
            return login_page(full_url(false));
        $model = new \App\Models\JaminanModel;
        $jaminan = $model->getData([
            'id', 'request_id'
        ])->where(['enkrip' => $param])->where(
            'jaminan_issued.id IS NULL'
        )->data(false);
        if ($jaminan !== null) {
            $data = array(
                'id' => create_id(),
                'id_jaminan' => $jaminan['id']
            );
            $result = $model->transaction(function ($db) use ($data) {
                $db->table('jaminan_issued')->insert($data);
            });
            if ($result) {
                // success
            } else {
                // failed
            }
        }
        return redirect()->to('guarantee/detail/' . $param);
    }

    public function process()
    {
        if (!is_login())
            return login_page(full_url(false));
        helper('array');
        $enkrip = prefix_key_filter($this->request->getPost(), 'check_', 'on');
        if (!empty($enkrip)) {
            $model = new \App\Models\JaminanModel;
            $jaminan = $model->getData(['id', 'issued', 'asuransi_id'])->where([
                'enkrip' => $enkrip, 'issued' => 0
            ])->data();
            $datamodel = new \App\Models\JaminanData;
            $result = $datamodel->inforceProcess($jaminan);
            switch ($result) {
                case 0:
                    // blanko empty
                    break;
                case 1:
                    // all success
                    break;
                case 2:
                    // not match
                    break;
                case 3:
                    // empty jaminan
                    break;
                default:
                    break;
            }
        }
        return redirect()->to('inforce');
    }

    public function table($pageNumber)
    {
        $page = intval($pageNumber);
        if (is_login() && $page > 0) {
            $table = new \App\Libraries\Tables;
            return $this->response->setJSON(
                $table->inforceList($page)
            );
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
