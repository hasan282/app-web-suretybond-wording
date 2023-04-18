<?php

namespace App\Models;

class BaseModel
{
    protected $db, $select, $table, $where;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->select = null;
        $this->table = null;
        $this->where = null;
    }

    public function transaction(?callable $callback)
    {
        $this->db->transBegin();
        $callback($this->db);
        $this->db->transComplete();
        return $this->db->transStatus();
    }
}
