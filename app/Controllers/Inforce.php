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
        return $this->view('inforce/index', $data, true);

        // $id = create_id();
        // var_dump($id);
        // var_dump(sha3hash($id, 40));
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
