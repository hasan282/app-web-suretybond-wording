<?php

namespace App\Controllers;

class Insurance extends BaseController
{
    public function index()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Asuransi';
        $this->plugin->setup('scrollbar');
        $this->view('insurance/index', $data);
    }
}
