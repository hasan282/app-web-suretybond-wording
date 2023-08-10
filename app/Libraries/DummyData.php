<?php

namespace App\Libraries;

class DummyData
{
    private $count = 673;

    public function jaminanDraft()
    {
        $principal = new \App\Models\PrincipalModel;
        $insurance = new \App\Models\InsuranceModel;
        $dataPrinc = $principal->getPeople(['id'])->data();
        $dataInsrc = $insurance->getPeople(['id'], true)->where([
            'active' => 1, 'active_cabang' => 1, 'active_people' => 1
        ])->data();
        $dataPrinc = array_map(function ($item) {
            return $item['id'];
        }, $dataPrinc);
        $dataInsrc = array_map(function ($item) {
            return $item['id'];
        }, $dataInsrc);
        $data = array();
        for ($jam = 0; $jam < $this->count; $jam++) {
            $jaminan['id'] = create_id(4, true);
            $jaminan['enkripsi'] = sha3hash($jaminan['id'], 60);
            $jaminan['id_principal_people'] = $dataPrinc[array_rand($dataPrinc)];
            $jaminan['id_asuransi_people'] = $dataInsrc[array_rand($dataInsrc)];
            $jaminan['nilai_proyek'] = mt_rand(100000, 2550000) . '00';
            $jaminan['id_currency_proyek'] = '1';
            $jaminan['nilai_jaminan'] = ($jaminan['nilai_proyek'] * 15 / 100) . '';
            $jaminan['id_currency_jaminan'] = '1';
            $jaminan['actives'] = '1';
            $data[] = $jaminan;
        }
        return $data;
    }
}
