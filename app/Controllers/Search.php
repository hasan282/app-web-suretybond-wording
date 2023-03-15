<?php

namespace App\Controllers;

class Search extends BaseController
{
    public function index()
    {
        $data['title'] = 'Pencarian Data';
        $this->plugin->setup('scrollbar');
        $this->view('search/index', $data);
    }
}
