<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $this->plugin->setup('icheck');
        $this->view('layout/login');
    }
}
