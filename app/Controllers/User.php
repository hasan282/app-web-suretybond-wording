<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        if (!is_login())
            return login_page(full_url(false));
        $userModel =  new \App\Models\UserModel;
        $data['users'] = $userModel->getData();
        $data['title'] = 'Informasi User';
        $this->plugin->setup('scrollbar');
        return $this->view('user/index', $data, true);
    }

    public function account()
    {
        if (!is_login())
            return login_page(full_url(false));
        if (!role_is([101, 102])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {
            $data['title'] = 'Manajemen User';
            $this->plugin->setup('scrollbar');
            return $this->view('administrator/account/index', $data, true);
        }
    }
}
