<?php

namespace App\Models\Cores;

use Config\Database;

class BaseModel
{
    protected $connect;

    private $fields, $aliases, $duplicate, $table, $joins;
    private $select, $fieldselect, $tablefrom;
    private $limit, $offset;

    public function __construct()
    {
        $this->connect = Database::connect();
        $this->_refresh();
    }

    public function select(array $fields)
    {
        if ($this->table === null) return $this;
        if (!empty($fields)) $this->select = array_unique(array_merge($this->select, $fields));
        $queryselect = '*';
        if (!empty($this->fields[$this->table]))
            $queryselect = implode(', ', array_values($this->fields[$this->table]));
        $queryfrom = $this->table;
        if (!empty($this->select)) {
            $tablefields = $this->fields[$this->table];
            $requires = array();
            foreach ($this->joins as $table => $value) {
                $intersect = array();
                if (array_key_exists($table, $this->fields)) {
                    $intersect = array_intersect(array_keys($this->fields[$table]), $this->select);
                }
                if (!empty($intersect)) {
                    $tablefields = array_merge($tablefields, $this->fields[$table]);
                    if (!in_array($value['require'], $requires) && $value['require'] != $this->table) {
                        array_push($requires, $value['require']);
                    }
                    array_push($requires, $table);
                }
            }
            foreach ($requires as $req) {
                if ($queryfrom == $this->table) $queryfrom = '`' . $queryfrom . '`';
                $queryfrom = str_replace(':table:', $queryfrom, $this->joins[$req]['table']);
            }
            $selected = array();
            foreach ($tablefields as $key => $val) if (in_array($key, $this->select)) $selected[] = $val;
            if (!empty($selected)) $queryselect = implode(', ', $selected);
        }
        $this->_refresh(false, 'select');
        $this->fieldselect = $queryselect;
        $this->tablefrom = $queryfrom;
        return $this;
    }

    public function limit(int $limit, int $offset = 0)
    {
        if ($limit > 0) {
            $this->limit = $limit;
            if ($offset >= 0) $this->offset = $offset;
        }
        return $this;
    }

    public function data(bool $alwayslist = true)
    {
        $build = $this->_build();
        $build->select($this->fieldselect);
        $result = $build->get()->getResultArray();
        if ($alwayslist) {
            return $result;
        } else {
            $size = sizeof($result);
            if ($size === 0) return null;
            if ($size === 1) return $result[0];
            return $result;
        }
    }

    public function count(): int
    {
        $build = $this->_build();
        if ($build === null) return 0;
        return intval($build->countAllResults());
    }

    /**
     * Set Fields
     * @param string $table table name
     * @param array $fields alias => colname
     * @return int check duplicate alias
     */
    protected function fields(string $table, array $fields)
    {
        if ($this->table === null) $this->table = $table;
        $datafields = array();
        $duplicate = 0;
        foreach ($fields as $alias => $name) {
            if (!in_array($alias, $this->aliases)) {
                array_push($this->aliases, $alias);
                $datafields[$alias] = $table . '.' . $name . ' AS ' . $alias;
            } else {
                $duplicate++;
                $this->duplicate++;
            }
        }
        $this->fields[$table] = $datafields;
        return $duplicate;
    }

    /**
     * Table Join
     * @param string $joiner table.colname=table.colname
     * @param string $key inner / left / right - or tablename
     * @return bool join created
     */
    protected function join(string $joiner, string $key = 'inner', bool $raw = false)
    {
        $jointipe = array(
            'inner' => 'INNER JOIN',
            'left' => 'LEFT OUTER JOIN',
            'right' => 'RIGHT OUTER JOIN'
        );
        $pattern = '/^[a-zA-Z_]+\.[a-zA-Z_]+=[a-zA-Z_]+\.[a-zA-Z_]+$/';
        if (!preg_match($pattern, $joiner) && !$raw) return false;
        if ($raw) {
            $this->joins[$key] = array(
                'require' => null,
                'table' => '(:table: ' . $joiner . ')'
            );
        } else {
            $joinkey = !array_key_exists(strtolower($key), $jointipe) ? 'inner' : strtolower($key);
            $joiners = explode('=', $joiner);
            $parts = array(explode('.', $joiners[0]), explode('.', $joiners[1]));
            $this->joins[$parts[1][0]] = array(
                'require' => $parts[0][0],
                'table' => '(:table: ' . $jointipe[$joinkey] . ' `' . $parts[1][0] . '` ON `' . implode('`.`', $parts[0]) . '` = `' . implode('`.`', $parts[1]) . '`)'
            );
        }
        return true;
    }

    private function _build()
    {
        if ($this->tablefrom === null) return null;
        $build = $this->connect->table($this->tablefrom)->limit($this->limit, $this->offset);
        return $build;
    }

    private function _refresh(bool $all = true, ?string $bundle = null)
    {
        if ($all || $bundle == 'select') {
            $this->fields = array();
            $this->aliases = array();
            $this->joins = array();
            $this->table = null;
            $this->duplicate = 0;
        }
        if ($all || $bundle == 'query') {
            $this->select = array();
            $this->fieldselect = null;
            $this->tablefrom = null;
            $this->limit = null;
            $this->offset = 0;
        }
    }
}
