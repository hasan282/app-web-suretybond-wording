<?php

namespace App\Models;

use App\Models\Cores\BaseModel;

class PrincipalModel2 extends BaseModel
{
    public function select(array $fields = [])
    {
        $this->fields('principal', array(
            'id' => 'id',
            'hash' => 'enkripsi',
            'principal' => 'nama',
            'telpon' => 'telpon',
            'email' => 'email',
            'alamat' => 'alamat',
            'office_id' => 'id_office',
            'marketing_id' => 'id_marketing',
            'active' => 'actives'
        ));
        $this->fields('principal_people', array(
            'people_id' => 'id',
            'people_hash' => 'enkripsi',
            'people' => 'nama',
            'jabatan' => 'jabatan',
            'people_active' => 'actives'
        ));
        $this->fields('principal_document', array(
            'doc_id' => 'id',
            'file' => 'filename',
            'doc_active' => 'actives'
        ));
        $this->join('principal.id=principal_people.id_principal', 'LEFT');
        $this->join('principal.id=principal_document.id_principal', 'LEFT');
        return parent::select($fields);
    }

    public function where($where)
    {
        $this->alias('where', array(
            'id' => 'principal.id',
            'id_people' => 'principal_people.id',
            'principal' => 'principal.nama',
            'active' => 'principal.actives',
        ));
        return parent::where($where);
    }

    public function order($order)
    {
        $this->alias('order', array(
            'principal' => 'principal.nama ASC'
        ));
        return parent::order($order);
    }
}
