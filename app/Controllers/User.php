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
        $this->view('user/index', $data);
    }
}
