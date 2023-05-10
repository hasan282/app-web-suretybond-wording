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
        // $data = $jaminan->getData()->data();
        $query = $jaminan->getData([
            'jenis_jaminan', 'asuransi', 'principal'
        ])->sql();

        // var_dump($data);
        echo '<textarea>' . $query . '</textarea>';
    }
}
