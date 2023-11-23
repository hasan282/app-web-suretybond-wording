<?php

namespace App\Models;

class PrincipalModelTwo extends BaseModelTwo
{
    public function select(array $select = [])
    {
        $principal = $this->fields('principal', [
            'id' => 'id',
            'hash' => 'enkripsi',
            'principal' => 'nama',
            'telpon' => 'telpon',
            'email' => 'email',
            'alamat' => 'alamat',
            'office_id' => 'id_office',
            'marketing_id' => 'id_marketing',
            'active' => 'actives'
        ]);
        $people = $this->fields('principal_people', [
            'people_id' => 'id',
            'people_hash' => 'enkripsi',
            'people_nama' => 'nama',
            'jabatan' => 'jabatan',
            'people_active' => 'actives'
        ]);
        $document = $this->fields('principal_document', [
            'doc_id' => 'id',
            'file' => 'filename',
            'doc_active' => 'actives'
        ]);
        $this->table($principal);
        $this->join($people, 'principal.id=principal_people.id_principal', 'LEFT');
        $this->join($document, 'principal.id=principal_document.id_principal', 'LEFT');
        return parent::select($select);
    }

    public function where($where)
    {
        return parent::where($where);
    }
}
