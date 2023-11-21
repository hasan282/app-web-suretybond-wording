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
            $fields = $this->table['fields'];
            foreach ($this->joins as $join) {
                $intersect = array_intersect(array_keys($join['fields']), $select);
                if (!empty($intersect)) {
                    $table = str_replace(':table:', $table, $join['table']);
                    $fields = array_merge($fields, $join['fields']);
                }
            }
            $selectors = array();
            foreach ($fields as $alias => $flds) if (in_array($alias, $select)) $selectors[] = $flds;
            if (!empty($selectors)) $selector = implode(', ', $selectors);
        }
        $this->query = 'SELECT ' . $selector . ' FROM ' . $table;
        return $this;
    }

    public function where()
    {
        return $this;
    }

    public function refresh()
    {
        $this->_emptyall();
        return $this;
    }

    protected function table(array $tableFields)
    {
        $this->table = $tableFields;
    }

    protected function join(array $tableFields, string $condition, ?string $join = null)
    {
        $joins = array(
            'inner' => 'INNER JOIN',
            'left' => 'LEFT OUTER JOIN',
            'right' => 'RIGHT OUTER JOIN',
        );
        $joinkey = $join === null || !array_key_exists(strtolower($join), $joins) ? 'inner' : strtolower($join);
        $tablejoin = '(:table: ' . $joins[$joinkey] . ' ' . $tableFields['table'] . ' ON ' . $condition . ')';
        $this->joins[] = array(
            'table' => $tablejoin,
            'fields' => $tableFields['fields']
        );
    }

    protected function fields(string $table, array $fields = []): array
    {
        $result = array();
        foreach ($fields as $key => $value)
            $result[$key] = $table . '.' . $value . ' AS `' . $key . '`';
        return array('table' => $table, 'fields' => $result);
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
        // var_dump($this->query);
        echo '<textarea>' . $this->query . '</textarea>';
    }
}
