<?php

namespace App\Models;

class ExampleModel extends BaseModelTwo
{
    public function select(array $select = [])
    {
        $principal = $this->fields(array(
            'id' => 'id',
            'hash' => 'enkripsi',
            'nama' => 'nama',
            'telpon' => 'telpon',
            'email' => 'email',
            'alamat' => 'alamat',
            'office_id' => 'id_office',
            'marketing_id' => 'id_marketing',
            'active' => 'actives'
        ), 'principal');

        $people = $this->fields(array(
            'people_id' => 'id',
            'people_hash' => 'enkripsi',
            'people_nama' => 'nama',
            'jabatan' => 'jabatan',
            'people_active' => 'actives'
        ), 'principal_people');

        $document = $this->fields(array(
            'doc_id' => 'id',
            'file' => 'filename',
            'doc_active' => 'actives'
        ), 'principal_document');

        $this->table('principal', $principal);
        $this->join(
            'principal_people',
            'principal.id = principal_people.id_principal',
            $people,
            'LEFT'
        );
        $this->join(
            'principal_document',
            'principal.id = principal_document.id_principal',
            $document,
            'LEFT'
        );
        return parent::select($select);
    }
}
