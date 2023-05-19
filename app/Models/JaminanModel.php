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

    public function getTable()
    {
        $this->select = '*';
        $this->table = 'jaminan';
        return $this;
    }

    public function getData(array $select = [])
    {
        $fields = array(
            'id' => 'jaminan.id AS id',
            'enkrip' => 'jaminan.enkripsi AS enkrip',
            'proyek_nama' => 'jaminan.nama_proyek AS proyek_nama',
            'proyek_alamat' => 'jaminan.alamat_proyek AS proyek_alamat',
            'proyek_nilai' => 'jaminan.nilai_proyek AS proyek_nilai',
            'dokumen' => 'jaminan.dokumen AS dokumen',
            'dokumen_date' => 'jaminan.dokumen_date AS dokumen_date',
            'obligee' => 'jaminan.obligee AS obligee',
            'obligee_alamat' => 'jaminan.alamat_obligee AS obligee_alamat',
            'nomor' => 'jaminan.nomor AS nomor',
            'nilai' => 'jaminan.nilai_jaminan AS nilai',
            'date_from' => 'jaminan.date_from AS date_from',
            'date_to' => 'jaminan.date_to AS date_to',
            'days' => 'jaminan.days AS days',
            'issued_place' => 'jaminan.issued_place AS issued_place',
            'issued_date' => 'jaminan.issued_date AS issued_date',
            'bahasa' => 'jaminan.bahasa AS bahasa',
            'active' => 'jaminan.actives AS active',
            'principal_pejabat_id' => 'jaminan.id_principal_people AS principal_pejabat_id',
            'asuransi_pejabat_id' => 'jaminan.id_asuransi_people AS asuransi_pejabat_id',
            'proyek_id' => 'jaminan.id_proyek AS proyek_id',
            'currency_proyek_id' => 'jaminan.id_currency_proyek AS currency_proyek_id',
            'pekerjaan_id' => 'jaminan.id_pekerjaan AS pekerjaan_id',
            'jenis_id' => 'jaminan.id_jenis AS jenis_id',
            'currency_id' => 'jaminan.id_currency_jaminan AS currency_id'
        );
        $fieldJoins = array(
            'jenis' => 'jaminan_jenis.jenis AS jenis',
            'proyek' => 'jaminan_proyek.proyek AS proyek',
            'pekerjaan' => 'jaminan_pekerjaan.pekerjaan AS pekerjaan'
        );
        $fieldAsuransi = array(
            'asuransi' => 'asuransi.nama AS asuransi',
            'asuransi_print' => 'asuransi.deskripsi AS asuransi_print',
            'asuransi_id' => 'asuransi.id AS asuransi_id',
            'asuransi_nick' => 'asuransi.nickname AS asuransi_nick',
            'cabang' => 'asuransi_cabang.cabang AS cabang',
            'cabang_print' => 'asuransi_cabang.deskripsi AS cabang_print',
            'cabang_alamat' => 'asuransi_cabang.alamat AS cabang_alamat',
            'cabang_pejabat' => 'asuransi_people.nama AS cabang_pejabat',
            'cabang_jabatan' => 'asuransi_people.jabatan AS cabang_jabatan'
        );
        $fieldPrincipal = array(
            'principal' => 'principal.nama AS principal',
            'principal_id' => 'principal.id AS principal_id',
            'principal_alamat' => 'principal.alamat AS principal_alamat',
            'principal_pejabat' => 'principal_people.nama AS principal_pejabat',
            'principal_jabatan' => 'principal_people.jabatan AS principal_jabatan'
        );
        $fieldCurrency = array(
            'currency_proyek' => 'currency_proyek.nama AS currency_proyek',
            'currency_proyek_1' => 'currency_proyek.symbol_1 AS currency_proyek_1',
            'currency_proyek_2' => 'currency_proyek.symbol_2 AS currency_proyek_2',
            'currency' => 'currency_jaminan.nama AS currency',
            'currency_1' => 'currency_jaminan.symbol_1 AS currency_1',
            'currency_2' => 'currency_jaminan.symbol_2 AS currency_2'
        );
        $table = 'jaminan';
        if (!empty(array_intersect(array_keys($fieldPrincipal), $select))) {
            $fields = array_merge($fields, $fieldPrincipal);
            $table = '(' . $table . ' INNER JOIN principal_people ON principal_people.id = jaminan.id_principal_people)';
            $table = '(' . $table . ' INNER JOIN principal ON principal.id = principal_people.id_principal)';
        }
        if (!empty(array_intersect(array_keys($fieldAsuransi), $select))) {
            $fields = array_merge($fields, $fieldAsuransi);
            $table = '(' . $table . ' INNER JOIN asuransi_people ON asuransi_people.id = jaminan.id_asuransi_people)';
            $table = '(' . $table . ' INNER JOIN asuransi_cabang ON asuransi_cabang.id = asuransi_people.id_cabang)';
            $table = '(' . $table . ' INNER JOIN asuransi ON asuransi.id = asuransi_cabang.id_asuransi)';
        }
        if (!empty(array_intersect(array_keys($fieldJoins), $select))) {
            $fields = array_merge($fields, $fieldJoins);
            $table = '(' . $table . ' LEFT OUTER JOIN jaminan_jenis ON jaminan_jenis.id = jaminan.id_jenis)';
            $table = '(' . $table . ' LEFT OUTER JOIN jaminan_proyek ON jaminan_proyek.id = jaminan.id_proyek)';
            $table = '(' . $table . ' LEFT OUTER JOIN jaminan_pekerjaan ON jaminan_pekerjaan.id = jaminan.id_pekerjaan)';
        }
        if (!empty(array_intersect(array_keys($fieldCurrency), $select))) {
            $fields = array_merge($fields, $fieldCurrency);
            $table = '(' . $table . ' LEFT OUTER JOIN currency AS currency_proyek ON jaminan.id_currency_proyek = currency_proyek.id)';
            $table = '(' . $table . ' LEFT OUTER JOIN currency AS currency_jaminan ON currency_jaminan.id = jaminan.id_currency_jaminan)';
        }
        $this->select($fields, $select);
        $this->table = $table;
        return $this;
    }

    // ----- PARENT OVERRIDE ------------------------------------------------------

    public function where($where, array $addField = [])
    {
        $fields = array(
            'active' => 'jaminan.actives',
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