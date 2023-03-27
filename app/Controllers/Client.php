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
        $data['title'] = 'Data Obligee';
        $data['jscript'] = 'all/tables';
        $this->plugin->setup('scrollbar');
        $this->view('client/obligee', $data);
    }

    public function obligeeAdd()
    {
        $data['title'] = 'Data Obligee';
        $data['bread'] = array('Oblegee|client/obligee', 'Tambah Data');
        $this->plugin->setup('scrollbar|dateinput');
        $this->view('client/add_obligee', $data);
    }

    public function principalAdd()
    {
        $data['title'] = 'Tambah Data Principal';
        $data['bread'] = array('Principal|client/principal', 'Tambah Data');
        $this->plugin->setup('scrollbar');
        return $this->view('client/add_principal', $data);
    }
}
