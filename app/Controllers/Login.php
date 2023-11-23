<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $this->_trials();
        // if (is_login()) {
        //     return redirect()->to('dashboard');
        // } else {
        //     $data['userid'] = get_cookie('USRLOG');
        //     $this->plugin->setup('icheck');
        //     return $this->view('layout/login', $data, true);
        // }
    }

    private function _trials()
    {
        $model = new \App\Models\DataModel;
        $model->select(['id', 'principal', 'people_nama', 'file']);
        var_dump($model->count());
        var_dump($model->limit(10, 10)->data());
    }

    private function _trials1()
    {
        $model = new \App\Models\PrincipalModelTwo;
        // var_dump($model->querystring());
        $result = $model->select([
            'id', 'idam', 'hash', 'nama', 'people_nama', 'doc_id', 'file'
        ])->querystring();

        echo '<textarea>' . $result . '</textarea>';
    }
}
