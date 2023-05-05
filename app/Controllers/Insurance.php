<?php

namespace App\Controllers;

class Insurance extends BaseController
{
    public function index()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Asuransi';
        $this->plugin->setup('scrollbar');
        $this->view('insurance/index', $data);

        // $this->_test2();
    }

    private function _test1()
    {
        // var_dump($_SESSION);

        // var_dump(userdata('office_id'));

        // $data['id'] = create_id();
        // $data['enkripsi'] = sha3hash($data['id'], 40);
        // $data['id_cabang'] = '2305041529071588';
        // $data['nama'] = 'Ricky Firmansyah';
        // $data['jabatan'] = 'Branch Manager';

        // var_dump($data);

        $select = array('namass');
        $field = array('id', 'nama', 'alamat');
        var_dump(!empty(array_intersect($field, $select)));
    }

    private function _test2()
    {
        // $principal = new \App\Models\PrincipalModel;
        $asuransi = new \App\Models\InsuranceModel;

        // $data = array(
        //     'pejabat' => 'Jojon Marojon',
        //     'jabatan' => 'General Manager'
        // );
        // var_dump($principal->addPeople('2304270957274734', $data));

        // $pr = $principal->getData(
        // ['enkrip', 'principal']
        // )->where(
        // ['enkrip' => '8d9baa09a1da1be0420112fbd2e778ea31d0893d7b124253f9']
        // ['office' => userdata('office_id')]
        // )->order('principal')->data(false);

        // $principal->getData(['enkrip', 'principal'])->where(['office' => userdata('office_id')]);
        // $pr = array(
        //     'count' => $principal->count(),
        //     'data' => $principal->order('principal')->data(false)
        // );

        $pr = $asuransi->getData(['enkrip', 'asuransi'])->where(['active' => 1])->order('asuransi')->data();

        var_dump($pr);
        // echo $pr;
    }

    public function dataCabang($enkrip)
    {
    }
}
