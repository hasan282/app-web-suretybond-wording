<?php

namespace App\Models;

class BaseModelTwo
{
    protected $connect;

    private $table, $joins, $query;

    public function __construct()
    {
        $this->connect = \Config\Database::connect();
        $this->_emptyall();
    }

    public function select(array $select = [])
    {
        if (empty($this->table)) return $this;
        $selector = '*';
        $table = $this->table['table'];
        if (!empty($select)) {
            $fields = $this->table['field'];
            foreach ($this->joins as $join) {
            }
        }
        $this->query = 'SELECT ' . $selector . ' FROM ' . $table;
        return $this;
    }

    public function refresh()
    {
        $this->_emptyall();
        return $this;
    }

    protected function table(string $table, array $fields = [])
    {
        $this->table = array(
            'table' => $table,
            'field' => $fields
        );
    }

    protected function join(string $table, string $condition, array $fields, ?string $join = null)
    {
        $joins = array(
            'inner' => 'INNER JOIN',
            'left' => 'LEFT OUTER JOIN',
            'right' => 'RIGHT OUTER JOIN',
        );
        $joinkey = $join === null || !array_key_exists(strtolower($join), $joins) ? 'inner' : strtolower($join);
        $tablejoin = '(:table: ' . $joins[$joinkey] . ' ' . $table . ' ON ' . $condition . ')';
        $this->joins[] = array(
            'table' => $tablejoin,
            'field' => $fields
        );
    }

    protected function fields(array $fields, ?string $table = null): array
    {
        $result = array();
        foreach ($fields as $key => $value) {
            if ($table === null) {
                $result[$key] = $value . ' AS `' . $key . '`';
            } else {
                $result[$key] = $table . '.' . $value . ' AS `' . $key . '`';
            }
        }
        return $result;
    }

    private function _emptyall()
    {
        $this->table = array();
        $this->joins = array();
        $this->query = null;
    }

    public function dumps()
    {
        var_dump($this->table);
        var_dump($this->joins);
        var_dump($this->query);
    }
}
