<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        if (is_login()) {
            return redirect()->to('dashboard');
        } else {
            $flashdata = $this->session->getFlashdata();
            $data['userid'] = get_cookie('USRLOG');
            $data['flash'] = array(
                'login_fail' => ($flashdata['login_status'] ?? '') == 'failed',
                'username' => $flashdata['username'] ?? null,
                'invalid' => $flashdata['is_invalid'] ?? null
            );
            $this->plugin->setup('icheck');
            return $this->view('layout/login', $data, true);
        }
    }
}
