<?php

namespace App\Controllers;

class Client extends BaseController
{
    public function index()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Data Principal';
        $data['jscript'] = 'all/tables';
        $this->plugin->setup('scrollbar');
        $this->view('client/index', $data);
    }

    public function add()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Tambah Data Principal';
        $data['bread'] = array('Principal|client', 'Tambah Data');
        $this->plugin->setup('scrollbar');
        $this->view('client/add/index', $data);
    }

    public function detail()
    {
        $data['title'] = 'Detail Principal';
        $data['bread'] = array('Principal|client', 'Detail');
        $this->plugin->setup('scrollbar');
        $this->view('client/detail', $data);
    }
}
