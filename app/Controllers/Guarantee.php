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

    public function detail()
    {
        $data['title'] = 'Detail Jaminan';
        $this->plugin->setup('scrollbar');
        $this->view('guarantee/detail', $data);
    }

    public function issued()
    {
        $data['title'] = 'Jaminan Diterbitkan';
        $this->plugin->setup('scrollbar');
        $this->view('guarantee/draft', $data);
    }

    public function add()
    {
        $data['title'] = 'Jaminan Diterbitkan';
        $this->plugin->setup('scrollbar');
        $this->view('guarantee/add', $data);
    }

    public function add_proccess()
    {
        var_dump($_POST);
    }
}
