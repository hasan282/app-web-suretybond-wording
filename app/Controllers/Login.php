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
            $usercookie = get_cookie('USRLOG');
            $data['userlast'] = $this->_userload($usercookie);
            $data['flash'] = array(
                'login_fail' => ($flashdata['login_status'] ?? '') == 'failed',
                'message' => $flashdata['fail_message'] ?? null,
                'username' => $flashdata['username'] ?? null,
                'invalid' => $flashdata['is_invalid'] ?? null,
                'url' => $flashdata['requested_url'] ?? null
            );
            $this->plugin->setup('icheck');
            return $this->view('layout/login', $data, true);
        }
    }

    private function _userload(?string $hash): ?array
    {
        if ($hash === null) return null;
        $model = new \App\Models\UserModel2;
        return $model->select([
            'user', 'nama', 'image', 'path'
        ])->where([
            'hash' => $hash,
            'active' => 1
        ])->data(false);
    }

    public function userchange()
    {
        return redirect()->deleteCookie('USRLOG')->to('');
    }
}
