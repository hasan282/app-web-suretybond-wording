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
        $data = $model->getData([
            'id', 'user', 'pass', 'nama', 'office_id',
            'role_id', 'role', 'image', 'image_path'
        ])->where(
            ['user' => $username, 'active' => 1]
        )->data(false);
        if ($data === null) {
            // false username
            $this->session->setFlashdata('login_status', 'failed');
        } else {
            $userdata = array(
                'id' => $data['id'],
                'user' => $data['user'],
                'nama' => $data['nama'],
                'foto' => '/' . $data['image_path'] . '/' . $data['image'],
                'office_id' => $data['office_id'],
                'office' => 'PT Jasmine Indah Servistama',
                'role_id' => $data['role_id'],
                'role' => $data['role']
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
