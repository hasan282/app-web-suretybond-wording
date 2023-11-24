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
        // $this->view('setting/index', $data);
        return $this->view('layout/maintenance/index', $data, true);
    }

    public function photo()
    {
        $data['title'] = 'Edit Avatar';
        $this->view('user/edit_profile_image', $data);
    }

    public function profile()
    {
        $data['title'] = 'Edit Profile';
        $this->view('user/edit_profile', $data);
    }

    public function change()
    {
        $data['title'] = 'Change Password';
        $this->view('user/change_pass', $data);
    }
}
