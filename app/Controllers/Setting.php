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
}
