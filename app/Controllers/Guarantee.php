<?php

namespace App\Controllers;

class Guarantee extends BaseController
{
    public function index()
    {
        $data['title'] = 'Data Jaminan';
        $this->plugin->setup('scrollbar');
        $this->view('guarantee/draft', $data);
    }

    public function detail()
    {
        $data['title'] = 'Detail Jaminan';
        $data['bread'] = array('Data Jaminan|guarantee', 'Detail');
        $this->plugin->setup('scrollbar');
        $this->view('guarantee/detail', $data);
    }

    public function add()
    {
        $data['title'] = 'Jaminan Diterbitkan';
        $this->plugin->setup('scrollbar|dateinput');
        $this->view('guarantee/add', $data);
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
