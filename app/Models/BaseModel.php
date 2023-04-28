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
            $this->_createQuery($this->select, $this->table);
            $binds = empty($this->bind) ? null : $this->bind;
            $data = $this->db->query($this->query, $binds)->getResultArray();
            if ($alwaysList) {
                return $data;
            } else {
                $dataCount = sizeof($data);
                if ($dataCount > 1) {
                    return $data;
                } elseif ($dataCount === 1) {
                    return $data[0];
                } else {
                    return null;
                }
            }
        }
    }

    public function count(string $field = 'id')
    {
    }

    public function limit(int $limit, int $offset = 0)
    {
    }

    public function where($where, array $fields = [])
    {
        $whereQuery = array();
        if (is_string($where)) array_push($whereQuery, $where);
        if (is_array($where)) {
            foreach ($where as $key => $val) {
                if (array_key_exists($key, $fields)) {
                    $query = $fields[$key];
                    if (is_integer($val)) $query .= ' = ?';
                    if (is_string($val)) {
                        if (substr($val, 0, 1) == '%' || substr($val, -1) == '%') {
                            $query .= ' LIKE ?';
                        } else {
                            $query .= ' = ?';
                        }
                    }
                    if (is_array($val)) $query .= ' IN ?';
                    if (substr($query, -1) == '?') {
                        array_push($whereQuery, $query);
                        array_push($this->bind, $val);
                    }
                }
            }
        }
        if (!empty($whereQuery)) {
            if ($this->where === null) {
                $this->where = $whereQuery;
            } else {
                $this->where = array_merge($this->where, $whereQuery);
            }
        }
        return $this;
    }

    public function order($order, bool $isQuery = false, array $orderOptions = [])
    {
        if (!$isQuery) {
            $field = array();
            if (is_string($order) && in_array($order, array_keys($orderOptions)))
                array_push($field, $orderOptions[$order]);
            if (is_array($order)) foreach ($order as $od) if (
                array_key_exists($od, $orderOptions)
            ) array_push($field, $orderOptions[$od]);
            if (!empty($field)) $this->order = $field;
        }
        if ($isQuery && is_string($order)) $this->order = $order;
        return $this;
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

    private function _createQuery(?string $select, ?string $table)
    {
        $query = 'SELECT ' . $select . ' FROM ' . $table;
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
