<?php

namespace App\Controllers;

class Errors extends BaseController
{
    public function index()
    {
        $data['title'] = 'Page Not Found';
        if (is_login()) {
            $this->plugin->setup('scrollbar');
            return $this->view('errors/custom/admin', $data, true);
        } else {
            return $this->view('errors/custom/general', $data, true);
        }
    }
}
