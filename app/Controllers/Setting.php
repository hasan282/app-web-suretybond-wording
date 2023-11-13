<?php

namespace App\Controllers;

class Setting extends BaseController
{
    public function index()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Pengaturan';
        $this->plugin->setup('scrollbar');
        $this->view('setting/index', $data);
    }
    public function photo()
    {
        $data['title'] = 'Edit Avatar';
        $this->view('user/editImage', $data);
    }
    public function profile()
    {
        $data['title'] = 'Edit Profile';
        $this->view('user/editProfile', $data);
    }
    public function change()
    {
        $userModel =  new \App\Models\UserModel;
        $data['title'] = 'Change Password';
        $this->view('user/changePass', $data);
    }
}
