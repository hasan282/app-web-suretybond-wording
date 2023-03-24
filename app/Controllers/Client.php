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

    public function add_client()
    {
        var_dump($_POST);
        $data['title'] = 'Tambah Data Klien';
        $data['bread'] = array('Data Klien|client', 'Tambah Data Klient');
        $this->plugin->setup('scrollbar');
        // $this->view('client/index', $data);
        return $this->view('client/add', $data);
    }

    public function add_client_process()
    {
        var_dump($_POST);
        $data['title'] = 'Tambah Data Klien';
        $data['bread'] = array('Data Klien|client', 'Tambah Data Klient');
        $this->plugin->setup('scrollbar');
        return $this->view('client/add', $data);
    }
}
