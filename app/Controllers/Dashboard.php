<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Dashboard';
        $this->plugin->setup('scrollbar');
        $this->view('dashboard/user', $data);

        // $this->_trial();
    }

    private function _trial()
    {
        $jaminan = new \App\Models\JaminanModel;
        $data = $jaminan->getData()->data();

        var_dump($data);
    }
}
