<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function logout()
    {
        // return redirect()->to('');

        // var_dump(session()->get());
        var_dump(userdata());
    }

    public function user()
    {
        $api = new \App\Libraries\Api;
        $data = $api->userdata(
            (string) $this->request->getPost('in_user'),
            (string) $this->request->getPost('in_pass')
        );
        if ($data !== null) {
            // set session
        }
        return redirect()->to('');
    }
}
