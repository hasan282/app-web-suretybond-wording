<?php

namespace App\Models;

use App\Models\BaseModel;

class PrincipalModel extends BaseModel
{
    public function addNew(array $post = [], ?string $office = null)
    {
        $data['id'] = create_id();
        $data['enkripsi'] = sha3hash($data['id'], 50);
        $data['nama'] = strtoupper(trim($post['principal'] ?? ''));
        $data['telpon'] = trim($post['telpon'] ?? '');
        $data['email'] = trim($post['email'] ?? '');
        $data['alamat'] = trim(nl2space($post['alamat'] ?? ''));
        if ($office !== null) $data['id_office'] = $office;
        $data['actives'] = 1;
        foreach ($data as $k => $v) if ($v == '') unset($data[$k]);
        $insert = $this->transaction(function ($db) use ($data, $post) {
            $db->table('principal')->insert($data);
            $db->table('principal_people')->insert($this->_peopleData($data['id'], $post));
        });
        return $insert === false ? $insert : $data;
    }

    private function _peopleData(string $principal, $post = [])
    {
        $data['id'] = create_id();
        $data['enkripsi'] = sha3hash($data['id'], 50);
        $data['id_principal'] = $principal;
        $data['nama'] = trim($post['pejabat'] ?? '');
        $data['jabatan'] = trim($post['jabatan'] ?? '');
        $data['actives'] = 1;
        foreach ($data as $k => $v) if ($v == '') unset($data[$k]);
        return $data;
    }

    public function addPeople(string $principal, $post = [])
    {
        $data = $this->_peopleData($principal, $post);
        $insert = $this->transaction(function ($db) use ($data) {
            $db->table('principal_people')->insert($data);
        });
        return $insert === false ? $insert : $data;
    }

    public function getData(array $select = [], bool $active = true)
    {
        $fields = array(
            'id' => 'principal.id AS id',
            'enkrip' => 'principal.enkripsi AS enkrip',
            'principal' => 'principal.nama AS principal',
            'telpon' => 'principal.telpon AS telpon',
            'email' => 'principal.email AS email',
            'alamat' => 'principal.alamat AS alamat',
            'pejabat' => "GROUP_CONCAT(principal_people.nama SEPARATOR '@@') AS pejabat",
            'jabatan' => "GROUP_CONCAT(principal_people.jabatan SEPARATOR '@@') AS jabatan"
        );
        $peopleTable = empty($select) || !empty(array_intersect(array('pejabat', 'jabatan'), $select));
        $table = 'principal';
        if ($peopleTable) {
            $table .= ' INNER JOIN principal_people ON principal.id = principal_people.id_principal';
            $this->group = array('principal_people.id_principal');
        }
        $this->table = $table;
        if ($active) {
            $where = array('principal.actives = 1');
            if ($peopleTable) array_push($where, 'principal_people.actives = 1');
            $this->where = $where;
        } else {
            $fields['active'] = 'principal.actives AS active';
            if (!empty($select)) array_push($select, 'active');
        }
        $this->selector($fields, $select);
        return $this;
    }

    public function order($order, bool $isQuery = false)
    {
    }
}
