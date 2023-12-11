<?php

namespace App\Models;

use App\Models\Cores\BaseModel;

class UserModel2 extends BaseModel
{
    public function select(array $fields = [])
    {
        $this->fields('users', array(
            'id'         => 'id',
            'hash'       => 'enkripsi',
            'user'       => 'username',
            'pass'       => 'password',
            'nama'       => 'nama',
            'image_id'   => 'id_image',
            'office_id'  => 'id_office',
            'role_id'    => 'id_role',
            'active'     => 'actives'
        ));
        $this->fields('user_image', array(
            'image_hash' => 'enkripsi',
            'image'      => 'image_name',
            'path'       => 'image_path'
        ));
        $this->join('users.id_image=user_image.id');
        return parent::select($fields);
    }

    public function where($where)
    {
        $this->alias('where', array(
            'hash'    => 'users.enkripsi',
            'office'  => 'users.id_office',
            'active'  => 'users.actives'
        ));
        return parent::where($where);
    }
}
