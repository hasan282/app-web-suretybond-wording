<?php

namespace App\Models;

use App\Models\BaseModel;

class PrincipalModel extends BaseModel
{
    public function addNew(array $post = [], ?string $office = null)
    {
        $data['id'] = create_id();
        $data['enkripsi'] = sha3hash($data['id'], 50);
        $data['nama'] = trim($post['principal'] ?? '');
        $data['telpon'] = trim($post['telpon'] ?? '');
        $data['email'] = trim($post['email'] ?? '');
        $data['alamat'] = trim(nl2space($post['alamat'] ?? ''));
        if ($office !== null) $data['id_office'] = $office;
        $data['id_marketing'] = $post['marketing'] ?? '';
        $data['actives'] = 1;
        foreach ($data as $k => $v) if ($v == '') unset($data[$k]);
        $insert = $this->transaction(function ($db) use ($data, $post) {
            $db->table('principal')->insert($data);
            $db->table('principal_people')->insert($this->_peopleData($data['id'], $post));
            $dataRate = $this->_rateData($post['rates'], $data['id']);
            if (!empty($dataRate)) $db->table('principal_rate')->insertBatch($dataRate);
        });
        return $insert === false ? $insert : $data;
    }

    public function addPeople(string $principal, $post = [])
    {
        $data = $this->_peopleData($principal, $post);
        $insert = $this->transaction(function ($db) use ($data) {
            $db->table('principal_people')->insert($data);
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

    private function _rateData(array $rates, string $principal)
    {
        $data = array();
        foreach ($rates as $asrid => $jt) {
            $asuransi = ltrim($asrid, 'AS');
            foreach ($jt as $jtid => $pro) {
                $tipe = ltrim($jtid, 'JT');
                foreach ($pro as $proid => $rt) {
                    $rate = unformat($rt);
                    if ($rate !== null) $data[] = array(
                        'id_principal' => $principal,
                        'id_asuransi' => $asuransi,
                        'id_jenis' => $tipe,
                        'id_proyek' => ltrim($proid, 'PR'),
                        'rate_percent' => $rate
                    );
                }
            }
        }
        return $data;
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
        $this->select($fields, $select);
        return $this;
    }

    public function getPeople(array $select = [], bool $active = true)
    {
        $fields = array(
            'id' => 'principal_people.id AS id',
            'enkrip' => 'principal_people.enkripsi AS enkrip',
            'nama' => 'principal_people.nama AS nama',
            'jabatan' => 'principal_people.jabatan AS jabatan',
            'active' => 'principal_people.actives AS active'
        );
        $this->select($fields, $select);
        $this->table = 'principal_people';
        if ($active) $this->where = array('principal_people.actives = 1');
        return $this;
    }

    public function getRate(array $select = [])
    {
        $fields = array(
            'asuransi_id' => 'principal_rate.id_asuransi AS asuransi_id',
            'asuransi' => 'asuransi.nama AS asuransi',
            'proyek_id' => 'principal_rate.id_proyek AS proyek_id',
            'proyek' => 'jaminan_proyek.proyek AS proyek',
            'jenis_id' => 'principal_rate.id_jenis AS jenis_id',
            'jenis' => 'jaminan_jenis.jenis AS jenis',
            'rate' => 'principal_rate.rate_percent as rate',
            'minimum' => 'principal_rate.minimum AS minimum',
            'admin' => 'principal_rate.admin_fee AS admin'
        );
        $table = 'principal_rate INNER JOIN asuransi ON principal_rate.id_asuransi = asuransi.id';
        $table = '(' . $table . ') INNER JOIN jaminan_jenis ON principal_rate.id_jenis = jaminan_jenis.id';
        $table = '(' . $table . ') INNER JOIN jaminan_proyek ON principal_rate.id_proyek = jaminan_proyek.id';
        $table = '(' . $table . ') INNER JOIN principal ON principal_rate.id_principal = principal.id';
        $this->select($fields, $select);
        $this->table = $table;
        $this->order = array(
            'principal_rate.id_asuransi ASC',
            'principal_rate.id_proyek ASC',
            'principal_rate.id_jenis ASC'
        );
        return $this;
    }

    // ----- PARENT OVERRIDE ------------------------------------------------------

    public function where($where, array $addField = [])
    {
        $fields = array(
            'id' => 'principal.id',
            'id_principal' => 'principal_people.id_principal',
            'enkrip' => 'principal.enkripsi',
            'enkrip_people' => 'principal_people.enkripsi',
            'nama' => 'principal.nama',
            'office' => 'principal.id_office',
            'marketing' => 'principal.id_marketing'
        );
        if (!empty($addField)) $fields = array_merge($fields, $addField);
        return parent::where($where, $fields);
    }

    public function order($order, bool $isQuery = false, array $addOption = [])
    {
        $options = array(
            'principal' => 'principal.nama ASC',
            'oldest' => 'principal.id ASC',
            'newest' => 'principal.id DESC'
        );
        if (!empty($addOption)) $options = array_merge($options, $addOption);
        return parent::order($order, $isQuery, $options);
    }
}
