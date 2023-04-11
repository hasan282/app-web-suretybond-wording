<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        if (is_login()) {
            return redirect()->to('dashboard');
        } else {
            $this->plugin->setup('icheck');
            $this->view('layout/login');
        }
    }
}
