<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
    }

    public function logout()
    {
        return redirect()->to('');
    }

    public function user()
    {
        var_dump($_POST);
    }
}
