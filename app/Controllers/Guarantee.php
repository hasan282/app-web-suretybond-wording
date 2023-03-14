<?php

namespace App\Controllers;

class Guarantee extends BaseController
{
    public function index()
    {
        $data['title'] = 'Jaminan';
        $this->plugin->setup('scrollbar');
        $this->view('guarantee/draft', $data);
    }
}
