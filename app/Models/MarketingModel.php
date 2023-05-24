<?php

namespace App\Models;

use App\Models\BaseModel;

class MarketingModel extends BaseModel
{
    public function getData()
    {
        $this->select = 'id, nama';
        $this->table = 'marketing';
        $this->where = 'actives = 1';
        $this->order = 'nama ASC';
        return $this;
    }
}
