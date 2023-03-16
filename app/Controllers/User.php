<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data['title'] = 'Informasi User';
        $this->plugin->setup('scrollbar');
        $this->view('user/index', $data);
    }
}
