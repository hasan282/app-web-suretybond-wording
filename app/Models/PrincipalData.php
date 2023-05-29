<?php

namespace App\Models;

class PrincipalData
{
    private $model;

    public function __construct()
    {
        $this->model = new \App\Models\PrincipalModel;
    }

    public function getNestRate(string $principal_id)
    {
        $data = $this->model->getRate()->where(
            ['id' => $principal_id]
        )->data();
        $newData = array();
        foreach ($data as $rate) {
            $id_asuransi = $rate['asuransi_id'];
            foreach ($newData as &$insurance) {
                if ($insurance['id'] == $id_asuransi) {
                    $id_proyek = $rate['proyek_id'];
                    foreach ($insurance['proyek'] as &$proyeks) {
                        if ($proyeks['id'] == $id_proyek) {
                            $proyeks['rate'][] = array(
                                'jenis' => $rate['jenis'],
                                'rate' => $rate['rate'],
                                'minimum' => $rate['minimum'],
                                'admin' => $rate['admin']
                            );
                            continue 3;
                        }
                    }
                    $insurance['proyek'][] = array(
                        'id' => $rate['proyek_id'],
                        'nama' => $rate['proyek'],
                        'rate' => array(
                            array(
                                'jenis' => $rate['jenis'],
                                'rate' => $rate['rate'],
                                'minimum' => $rate['minimum'],
                                'admin' => $rate['admin']
                            )
                        )
                    );
                    continue 2;
                }
            }
            $newData[] = array(
                'id' => $id_asuransi,
                'asuransi' => $rate['asuransi'],
                'proyek' => array(
                    array(
                        'id' => $rate['proyek_id'],
                        'nama' => $rate['proyek'],
                        'rate' => array(
                            array(
                                'jenis' => $rate['jenis'],
                                'rate' => $rate['rate'],
                                'minimum' => $rate['minimum'],
                                'admin' => $rate['admin']
                            )
                        )
                    )
                )
            );
        }
        unset($proyeks);
        unset($insurance);
        return $newData;
    }
}
