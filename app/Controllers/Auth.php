<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function logout()
    {
        remove_userdata();
        return redirect()->to('');
    }

    public function user()
    {
        $api = new \App\Libraries\Api;
        $data = $api->userdata(
            (string) $this->request->getPost('in_user'),
            (string) $this->request->getPost('in_pass')
        );
        $redirect = redirect()->to('' . $this->request->getPost('requested_url'));
        if ($data !== null) {
            set_userdata($data);
            $redirect->setCookie('USRLOG', $data['id'], 432000);
        } else {
            $this->session->setFlashdata('login_status', 'failed');
        }
        return $redirect;
    }

    public function login()
    {
        $username = (string) $this->request->getPost('in_user');
        $password = (string) $this->request->getPost('in_pass');
        $requesturi = (string) $this->request->getPost('requested_url');
        $model = new \App\Models\UserModel;
        $data = $model->getData(
            ['id', 'user', 'pass', 'nama', 'office_id', 'access_id', 'active']
        )->where(
            ['user' => $username]
        )->data(false);
        if ($data === null) {
            // false username
            $this->session->setFlashdata('login_status', 'failed');
        } else {
            $userdata = array(
                'id' => $data['id'],
                'user' => $data['user'],
                'nama' => $data['nama'],
                'foto' => '/image/user/default_male.jpg',
                'office_id' => $data['office_id'],
                'office' => 'PT Jasmine Indah Servistama',
                'role_id' => $data['access_id'],
                'role' => 'Admin'
            );
            if ($data['pass'] === sha3hash($password, 40)) {
                set_userdata($userdata);
            } else {
                // false password
                $this->session->setFlashdata('login_status', 'failed');
            }
        }
        return redirect()->to('' . $requesturi);
    }
}
