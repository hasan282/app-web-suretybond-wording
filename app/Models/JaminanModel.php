<?php

namespace App\Models;

use App\Models\BaseModel;

class JaminanModel extends BaseModel
{
    public function addNew(?string $principal, ?string $asuransi)
    {
        $data['id'] = create_id(6);
        $data['enkripsi'] = sha3hash($data['id'], 60);
        $data['id_principal_people'] = $principal;
        $data['id_asuransi_people'] = $asuransi;
        $data['actives'] = 1;
        $insert = $this->transaction(function ($db) use ($data) {
            $db->table('jaminan')->insert($data);
        });
        return $insert === false ? $insert : $data;
    }

    public function getData(array $select = [])
    {
        $fields = array(
            'id' => 'jaminan.id AS id',
            'enkrip' => 'jaminan.enkripsi AS enkrip',
            'nomor' => 'jaminan.nomor AS nomor',
            'nilai' => 'jaminan.nilai_jaminan AS nilai',
            'jenis_id' => 'jaminan.id_jenis AS jenis_id',

            'jenis_jaminan' => 'jaminan_jenis.jenis AS jenis_jaminan',

            'asuransi' => 'asuransi.nama AS asuransi',
            'cabang' => 'asuransi_cabang.cabang AS cabang',

            'principal' => 'principal.nama AS principal'
        );
        $table = 'jaminan';

        $table = '(' . $table . ' INNER JOIN principal_people ON principal_people.id = jaminan.id_principal_people)';
        $table = '(' . $table . ' INNER JOIN principal ON principal.id = principal_people.id_principal)';

        $table = '(' . $table . ' INNER JOIN asuransi_people ON asuransi_people.id = jaminan.id_asuransi_people)';
        $table = '(' . $table . ' INNER JOIN asuransi_cabang ON asuransi_cabang.id = asuransi_people.id_cabang)';
        $table = '(' . $table . ' INNER JOIN asuransi ON asuransi.id = asuransi_cabang.id_asuransi)';

        $table = '(' . $table . ' LEFT OUTER JOIN jaminan_jenis ON jaminan_jenis.id = jaminan.id_jenis)';

        $this->select($fields, $select);
        $this->table = $table;
        return $this;
    }

    // ----- PARENT OVERRIDE ------------------------------------------------------

    public function where($where, array $addField = [])
    {
        $fields = array(
            'enkrip' => 'jaminan.enkripsi'
        );
        if (!empty($addField)) $fields = array_merge($fields, $addField);
        return parent::where($where, $fields);
    }

    public function order($order, bool $isQuery = false, array $addOption = [])
    {
        $options = array(
            'oldest' => 'jaminan.id ASC',
            'newest' => 'jaminan.id DESC'
        );
        if (!empty($addOption)) $options = array_merge($options, $addOption);
        return parent::order($order, $isQuery, $options);
    }
}
