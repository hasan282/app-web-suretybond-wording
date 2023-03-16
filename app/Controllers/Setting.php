<?php

namespace App\Controllers;

class Setting extends BaseController
{
    public function index()
    {
        $data['title'] = 'Pengaturan';
        $this->plugin->setup('scrollbar');
        $this->view('setting/index', $data);
    }
}
