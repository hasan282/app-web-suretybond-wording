<?php

namespace App\Controllers;

class Guarantee extends BaseController
{
    public function index()
    {
        $data['title'] = 'Data Jaminan';
        $data['jscript'] = 'all/tables';
        $this->plugin->setup('scrollbar');
        $this->view('guarantee/index', $data);
    }

    public function detail()
    {
        $data['title'] = 'Detail Jaminan';
        $data['bread'] = array('Data Jaminan|guarantee', 'Detail');
        $this->plugin->setup('scrollbar');
        $this->view('guarantee/detail', $data);
    }

    public function add_phase1()
    {
        $data['title'] = 'Tambah Data Jaminan';
        $data['bread'] = array('Jaminan|guarantee', 'Tambah Baru');
        $this->plugin->setup('scrollbar');
        $this->view('guarantee/add/phase1', $data);
    }

    public function add_phase2()
    {
        $data['title'] = 'Lengkapi Data Jaminan';
        $data['bread'] = array('Jaminan|guarantee', 'Lengkapi Data');
        $this->plugin->setup('scrollbar');
        $this->view('guarantee/add/phase2', $data);
    }

    public function print()
    {
        $data['title'] = 'Cetak Jaminan';
        $data['bread'] = array('Jaminan|guarantee', 'Detail|guarantee/detail', 'Cetak');
        $this->plugin->setup('scrollbar|jspdf');
        $this->view('guarantee/print', $data);
    }

    public function add_proccess()
    {
        var_dump($_POST);
    }

    public function add_margin()
    {
        var_dump($_POST);
    }

    public function add_width()
    {
        var_dump($_POST);
    }
}
