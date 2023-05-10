<?php

namespace App\Models;

class JaminanData
{
    private $model;

    public function __construct()
    {
        $this->model = new \App\Models\JaminanModel;
    }

    public function getDetail(string $enkripsi)
    {
        $fields = array(
            'jenis', 'bahasa', 'nomor', 'nilai', 'date_from', 'date_to', 'days',
            'issued_place', 'issued_date', 'enkrip',
            'asuransi', 'cabang', 'cabang_alamat', 'cabang_pejabat', 'cabang_jabatan',
            'principal', 'principal_alamat', 'principal_pejabat', 'principal_jabatan',
            'proyek', 'proyek_nama', 'proyek_alamat', 'proyek_nilai',
            'dokumen', 'dokumen_date', 'pekerjaan', 'obligee', 'obligee_alamat'
        );
        return $this->model->getData($fields)->where(
            ['enkrip' => $enkripsi]
        )->data(false);
    }

    public function dataInput(string $enkripsi)
    {
        $fields = array(
            'asuransi', 'cabang', 'principal'
        );
        return $this->model->getData($fields)->where(
            ['enkrip' => $enkripsi]
        )->data(false);
    }
}
