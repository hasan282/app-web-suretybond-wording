<?php

namespace App\Models\BlankoApp;

class DataModel extends BlankoModel
{
    public function select(array $fields = [])
    {
        $this->fields('blanko', array(
            'id'          => 'id',
            'hash'        => 'enkripsi',
            'asuransi_id' => 'id_asuransi',
            'prefix'      => 'prefix',
            'nomor'       => 'nomor',
            'office_id'   => 'id_office',
            'status_id'   => 'id_status',
            'date'        => 'date_in',
            'laprod'      => 'laprod',
            'ket'         => 'keterangan'
        ));
        $this->fields('asuransi', array(
            'asuransi_id'     => 'id',
            'asuransi_hash'   => 'enkripsi',
            'asuransi'        => 'nama',
            'asuransi_nick'   => 'nickname',
            'asuransi_prefix' => 'form_prefix',
            'asuransi_active' => 'is_active'
        ));
        $this->join('blanko.id_asuransi=asuransi.id');
        return parent::select($fields);
    }

    public function where($where)
    {
        $this->alias('where', array(
            'id'       => 'blanko.id',
            'hash'     => 'blanko.enkripsi',
            'nomor'    => 'blanko.nomor',
            'asuransi' => 'blanko.id_asuransi',
            'office'   => 'blanko.id_office',
            'status'   => 'blanko.id_status'
        ));
        return parent::where($where);
    }

    public function order($order)
    {
        $this->alias('order', array(
            'nomor' => 'blanko.nomor'
        ));
        return parent::order($order);
    }
}
