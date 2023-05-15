<?php

namespace App\Controllers;

class Search extends BaseController
{
    public function index()
    {
        // if (!is_login())
        //     return login_page(full_url(false));
        // $data['title'] = 'Pencarian Data';
        // $this->plugin->setup('scrollbar');
        // $this->view('search/index', $data);

        $this->_export();
    }

    private function _export()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'PDF';
        $this->plugin->setup('scrollbar|pdfmake');
        $this->view('guarantee/pdf');
    }
}
