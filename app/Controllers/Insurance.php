<?php

namespace App\Controllers;

class Insurance extends BaseController
{
    public function index()
    {
        // $data['title'] = 'Asuransi';
        // $this->plugin->setup('scrollbar');
        // $this->view('insurance/index', $data);
        for ($i = 0; $i < 30; $i++) {
            // $this->_test();
            echo create_id(8) . '<br>';
        }
    }

    private function _test()
    {
        $number = array();
        $count = 1000;
        for ($i = 0; $i < $count; $i++) array_push($number, '00' . mt_rand(1000, 9999));
        $banding = $count - sizeof(array_unique($number)) . ' : ' . $count;

        echo $banding . '<br>';
    }
}
