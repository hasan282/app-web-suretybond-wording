<?php

namespace App\Controllers;

class Client extends BaseController
{
    public function index()
    {
        $data['title'] = 'Data Klien';
        $this->plugin->setup('scrollbar');
        // $this->view('client/index', $data);
        $this->view('client/index2', $data);
    }
}
