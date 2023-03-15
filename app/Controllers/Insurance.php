<?php

namespace App\Controllers;

class Insurance extends BaseController
{
    public function index()
    {
        $data['title'] = 'Asuransi';
        $this->plugin->setup('scrollbar');
        $this->view('insurance/index', $data);
    }
}
