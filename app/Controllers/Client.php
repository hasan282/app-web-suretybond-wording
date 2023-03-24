<?php

namespace App\Controllers;

class Client extends BaseController
{
    public function index()
    {
        $data['title'] = 'Data Principal';
        $data['jscript'] = 'all/tables';
        $this->plugin->setup('scrollbar');
        $this->view('client/principal', $data);
    }

    public function obligee()
    {
    }

    public function principalAdd()
    {
        $data['title'] = 'Tambah Data Principal';
        $data['bread'] = array('Principal|client/principal', 'Tambah Data');
        $this->plugin->setup('scrollbar');
        return $this->view('client/add', $data);
    }

    public function add_client_process()
    {
        // var_dump($_POST);
        $data['title'] = 'Tambah Data Klien';
        $data['bread'] = array('Data Klien|client', 'Tambah Data Klient');
        $this->plugin->setup('scrollbar');
        return $this->view('client/add', $data);
    }
}
