<?php

namespace App\Controllers;

class Search extends BaseController
{
    public function index()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'Pencarian Data';
        $this->plugin->setup('scrollbar');
        $this->view('search/index', $data);
        // $this->_trial();
    }

    private function _trial()
    {
        $model = new \App\Models\BlankoApp\DataModel;
        $model->select([
            'id', 'hash', 'asuransi', 'prefix', 'nomor'
        ])->limit(10)->where([
            'asuransi' => '221006103529',
            'office' => '221002065931',
            'status' => 1,
            'nomor' => '%300%'
        ])->order('nomor');

        var_dump($model->count());
        var_dump($model->data());
    }
}
