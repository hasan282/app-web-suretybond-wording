<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Dashboard';
        $this->plugin->setup('scrollbar');
        $this->view('dashboard/user', $data);
    }
}
