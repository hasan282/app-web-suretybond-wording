<?php

namespace App\Controllers;

class Search extends BaseController
{
    public function index()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Pencarian Data';
        $this->plugin->setup('scrollbar');
        $this->view('search/index', $data);
    }
}
