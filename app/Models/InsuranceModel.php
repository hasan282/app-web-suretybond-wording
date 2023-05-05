<?php

namespace App\Models;

use App\Models\BaseModel;

class InsuranceModel extends BaseModel
{
    public function getData(array $select = [])
    {
        $fields = array(
            'id' => 'asuransi.id AS id',
            'enkrip' => 'asuransi.enkripsi AS enkrip',
            'asuransi' => 'asuransi.nama AS asuransi',
            'nickname' => 'asuransi.nickname AS nickname',
            'fullname' => 'asuransi.deskripsi AS fullname',
            'active' => 'asuransi.actives AS active'
        );
        $fieldCabang = array(
            'cabang' => 'asuransi_cabang.cabang AS cabang',
            'cabang_id' => 'asuransi_cabang.id AS cabang_id',
            'cabang_enkrip' => 'asuransi_cabang.enkripsi AS cabang_enkrip',
            'alamat' => 'asuransi_cabang.alamat AS alamat',
            'suffix' => 'asuransi_cabang.deskripsi AS suffix',
            'cabang_active' => 'asuransi_cabang.actives AS cabang_active'
        );
        $table = 'asuransi';
        if (!empty(array_intersect(array_keys($fieldCabang), $select))) {
            $fields = array_merge($fields, $fieldCabang);
            $table .= ' INNER JOIN asuransi_cabang ON asuransi.id = asuransi_cabang.id_asuransi';
        }
        $this->select($fields, $select);
        $this->table = $table;
        return $this;
    }

    // ----- PARENT OVERRIDE ------------------------------------------------------

    public function where($where, array $addField = [])
    {
        $fields = array(
            'active' => 'asuransi.actives',
            'active_cabang' => 'asuransi_cabang.actives',
            'enkrip' => 'asuransi.enkripsi',
            'enkrip_cabang' => 'asuransi_cabang.enkripsi'
        );
        if (!empty($addField)) $fields = array_merge($fields, $addField);
        return parent::where($where, $fields);
    }

    public function order($order, bool $isQuery = false, array $addOption = [])
    {
        $options = array(
            'asuransi' => 'asuransi.nama ASC'
        );
        if (!empty($addOption)) $options = array_merge($options, $addOption);
        return parent::order($order, $isQuery, $options);
    }
}
