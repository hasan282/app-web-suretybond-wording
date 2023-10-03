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
            'role_id' => 'users.id_role AS role_id',
            'active' => 'users.actives AS active'
        );
        $fieldImage = array(
            'image_id' => 'user_image.id AS image_id',
            'image_enkrip' => 'user_image.enkripsi AS image_enkrip',
            'image' => 'user_image.image_name AS image',
            'image_path' => 'user_image.image_path AS image_path'
        );
        $fieldRole = array(
            'role' => 'user_role.role AS role'
        );
        $table = 'users';
        if ($this->includes($fieldImage, $select)) {
            $fields = array_merge($fields, $fieldImage);
            $table = '(' . $table . ' LEFT OUTER JOIN user_image ON users.id_image = user_image.id)';
        }
        if ($this->includes($fieldRole, $select)) {
            $fields = array_merge($fields, $fieldRole);
            $table = '(' . $table . ' INNER JOIN user_role ON users.id_role = user_role.id)';
        }
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
            'user' => 'users.username',
            'active' => 'users.actives'
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
