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

    public function getPeople(array $select = [], bool $join = false)
    {
        $fields = array(
            'id' => 'asuransi_people.id AS id',
            'enkrip' => 'asuransi_people.enkripsi AS enkrip',
            'nama' => 'asuransi_people.nama AS nama',
            'jabatan' => 'asuransi_people.jabatan AS jabatan',
            'active' => 'asuransi_people.actives AS active'
        );
        $table = 'asuransi_people';
        if ($join) $table .= ' INNER JOIN asuransi_cabang ON asuransi_cabang.id = asuransi_people.id_cabang';
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
            'active_people' => 'asuransi_people.actives',
            'enkrip' => 'asuransi.enkripsi',
            'enkrip_cabang' => 'asuransi_cabang.enkripsi',
            'enkrip_people' => 'asuransi_people.enkripsi'
        );
        if (!empty($addField)) $fields = array_merge($fields, $addField);
        return parent::where($where, $fields);
    }

    public function order($order, bool $isQuery = false, array $addOption = [])
    {
        $options = array(
            'asuransi' => 'asuransi.nama ASC',
            'nickname' => 'asuransi.nickname ASC',
            'cabang' => 'asuransi_cabang.cabang ASC'
        );
        if (!empty($addOption)) $options = array_merge($options, $addOption);
        return parent::order($order, $isQuery, $options);
    }
}
