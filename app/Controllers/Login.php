<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        if (is_login()) {
            return redirect()->to('dashboard');
        } else {
            $data['userid'] = get_cookie('USRLOG');
            $this->plugin->setup('icheck');
            return $this->view('layout/login', $data, true);
        }
    }
}
