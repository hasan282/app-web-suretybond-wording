<?php

namespace App\Controllers;

class Insurance extends BaseController
{
    public function index()
    {
        // if (!is_login())
        //     return login_page(full_url(false));
        // $data['title'] = 'Asuransi';
        // $this->plugin->setup('scrollbar');
        // $this->view('insurance/index', $data);

        $this->_test2();
    }

    private function _test1()
    {
        var_dump($_SESSION);
    }

    private function _test2()
    {
        $principal = new \App\Models\PrincipalModel;

        // $data = array(
        //     'pejabat' => 'Jojon Marojon',
        //     'jabatan' => 'General Manager'
        // );
        // var_dump($principal->addPeople('2304270957274734', $data));

        $pr = $principal->getData(['enkrip', 'principal'])->data();

        var_dump($pr);
        // echo $pr;
    }
}
