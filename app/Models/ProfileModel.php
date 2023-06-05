<?php

namespace App\Models;

use App\Models\BaseModel;

class ProfileModel extends BaseModel
{
    public function addNew(array $post = [], string $jaminan)
    {
        $data['id'] = create_id();
        $data['enkripsi'] = sha3hash($data['id'], 40);
    }

    public function getTable()
    {
    }
}
