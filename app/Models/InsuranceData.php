<?php

namespace App\Models;

class InsuranceData
{
    private $model;

    public function __construct()
    {
        $this->model = new \App\Models\InsuranceModel;
    }

    public function getNestData()
    {
        $data = $this->model->getData([
            'id', 'asuransi', 'nickname', 'cabang', 'alamat', 'pejabat_concat'
        ])->where([
            'active' => 1, 'active_cabang' => 1
        ])->order('nickname')->data();
        $newData = array();
        foreach ($data as $ins) {
            $id = $ins['id'];
            foreach ($newData as &$new) {
                if ($new['id'] == $id) {
                    $new['branch'][] = array(
                        'cabang' => $ins['cabang'],
                        'alamat' => $ins['alamat'],
                        'pejabat' => $ins['pejabat_concat']
                    );
                    continue 2;
                }
            }
            $newData[] = array(
                'id' => $ins['id'],
                'nama' => $ins['asuransi'],
                'nick' => $ins['nickname'],
                'branch' => array(
                    array(
                        'cabang' => $ins['cabang'],
                        'alamat' => $ins['alamat'],
                        'pejabat' => $ins['pejabat_concat']
                    )
                )
            );
        }
        unset($new);
        return $newData;
    }
}
