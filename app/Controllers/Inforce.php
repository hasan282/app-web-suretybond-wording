<?php

namespace App\Controllers;

class Inforce extends BaseController
{
    public function index()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Inforce Jaminan';
        $data['jscript'] = 'all/tables';
        $this->plugin->setup('scrollbar|icheck');
        return $this->view('inforce/index', $data, true);

        // $id = create_id();
        // var_dump($id);
        // var_dump(sha3hash($id, 40));
    }

    public function newRequest($param)
    {
        // var_dump($param);

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
