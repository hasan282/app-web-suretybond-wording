<?php

namespace App\Models;

use App\Models\BaseModel;

class UserModel extends BaseModel
// 'fieldalias' => 'table. AS fieldalias',
{
    public function getData(array $select = [])
    {
        $fields = array(
            'id' => 'users.id AS id',
            'enkrip' => 'users.enkripsi AS enkrip',
            'user' => 'users.username AS user',
            'pass' => 'users.password AS pass',
            'nama' => 'users.nama AS nama',
            'office_id' => 'users.id_office AS office_id',
            'access_id' => 'users.id_access AS access_id',
            'active' => 'users.actives AS active'
        );
        $table = 'users';
        $this->select($fields, $select);
        $this->table = $table;
        return $this;
    }

    // ----- PARENT OVERRIDE ------------------------------------------------------

    public function where($where, array $addField = [])
    {
        $fields = array(
            'id' => 'users.id',
            'enkrip' => 'users.enkripsi',
            'user' => 'users.username'
        );
        if (!empty($addField)) $fields = array_merge($fields, $addField);
        return parent::where($where, $fields);
    }

    public function order($order, bool $isQuery = false, array $addOption = [])
    {
        $options = array();
        if (!empty($addOption)) $options = array_merge($options, $addOption);
        return parent::order($order, $isQuery, $options);
    }
}
