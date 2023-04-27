<?php

namespace App\Models;

class BaseModel
{
    protected $db, $bind;
    protected $select, $table, $where, $group, $order;

    private $query = '';

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->bind = array();
        $this->select = null;
        $this->table = null;
        $this->where = null;
        $this->group = null;
        $this->order = null;
    }

    public function transaction(?callable $callback)
    {
        $this->db->transBegin();
        $callback($this->db);
        $this->db->transComplete();
        return $this->db->transStatus();
    }

    public function data(bool $alwaysList = true)
    {
        if (!is_string($this->select) || !is_string($this->table)) {
            return null;
        } else {
            $this->_createQuery();
            $binds = empty($this->bind) ? null : $this->bind;
            $data = $this->db->query($this->query, $binds)->getResultArray();
            return $data;
        }
    }

    public function count(string $field = 'id')
    {
    }

    public function limit(int $limit, int $offset = 0)
    {
    }

    protected function selector(array $fields, array $select = [])
    {
        if (empty($select)) {
            $this->select = implode(', ', array_values($fields));
        } else {
            $selected = array();
            foreach ($fields as $key => $val) {
                if (in_array($key, $select)) array_push($selected, $val);
            }
            if (!empty($selected)) $this->select = implode(', ', $selected);
        }
    }

    private function _createQuery()
    {
        $query = 'SELECT ' . $this->select . ' FROM ' . $this->table;
        if ($this->where !== null) {
            if (is_string($this->where)) $query .= ' WHERE ' . $this->where;
            if (is_array($this->where)) $query .= ' WHERE ' . implode(' AND ', $this->where);
        }
        if ($this->group !== null) {
            if (is_string($this->group)) $query .= ' GROUP BY ' . $this->group;
            if (is_array($this->group)) $query .= ' GROUP BY ' . implode(', ', $this->group);
        }
        if ($this->order !== null) {
            if (is_string($this->order)) $query .= ' ORDER BY ' . $this->order;
            if (is_array($this->order)) $query .= ' ORDER BY ' . implode(', ', $this->order);
        }
        $this->query = $query;
    }
}
