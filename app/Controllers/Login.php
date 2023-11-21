<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        // $this->_trials();
        if (is_login()) {
            return redirect()->to('dashboard');
        } else {
            $data['userid'] = get_cookie('USRLOG');
            $this->plugin->setup('icheck');
            return $this->view('layout/login', $data, true);
        }
    }

    private function _trials()
    {
        $model = new \App\Models\ExampleModel;
        $model->select([
            'id', 'idam', 'hash', 'nama', 'people_nama', 'doc_id', 'file'
        ])->dumps();
    }
}
