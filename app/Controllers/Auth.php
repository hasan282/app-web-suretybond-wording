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
        if ($data !== null) set_userdata($data);
        return redirect()->to('');
    }
}
