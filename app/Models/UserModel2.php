<?php

namespace App\Models;

use App\Models\Cores\BaseModel;

class UserModel2 extends BaseModel
{
    public function select(array $fields = [])
    {
        $this->fields('users', array());
        return parent::select($fields);
    }
}
