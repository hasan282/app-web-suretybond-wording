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
            'issued_place', 'issued_date', 'enkrip', 'currency_proyek_2', 'currency_2',
            'asuransi', 'cabang', 'cabang_alamat', 'cabang_pejabat', 'cabang_jabatan',
            'principal', 'principal_alamat', 'principal_pejabat', 'principal_jabatan',
            'proyek', 'proyek_nama', 'proyek_alamat', 'proyek_nilai',
            'dokumen', 'dokumen_date', 'pekerjaan', 'obligee', 'obligee_alamat'
        );
        return $this->model->getData($fields)->where(
            ['enkrip' => $enkripsi]
        )->data(false);
    }

    public function dataPrint(string $enkripsi)
    {
        $fields = array(
            'jenis', 'nomor', 'nilai', 'currency', 'currency_2',
            'principal', 'principal_alamat', 'asuransi_print', 'cabang_print', 'cabang_alamat',
            'obligee', 'obligee_alamat'
        );
        return $this->model->getData($fields)->where(
            ['enkrip' => $enkripsi]
        )->data(false);
    }

    public function dataInput(string $enkripsi, array $exclude = [])
    {
        $fields = array(
            'obligee', 'obligee_alamat', 'proyek_id', 'proyek_nama', 'pekerjaan_id',
            'proyek_alamat', 'currency_proyek_id', 'proyek_nilai', 'dokumen', 'dokumen_date',
            'jenis_id', 'nomor', 'currency_id', 'nilai', 'bahasa', 'date_from', 'date_to', 'days',
            'issued_place', 'issued_date', 'asuransi', 'cabang', 'principal'
        );
        if (!empty($exclude)) $fields = array_diff($fields, $exclude);
        return $this->model->getData($fields)->where(
            ['enkrip' => $enkripsi]
        )->data(false);
    }

    public function rowEdit(string $enkripsi)
    {
        $request = \Config\Services::request();
        $data = array(
            'id_proyek' => $request->getPost('proyek'),
            'nama_proyek' => $request->getPost('proyek_nama'),
            'alamat_proyek' => $request->getPost('proyek_alamat'),
            'nilai_proyek' => unformat($request->getPost('proyek_nilai')),
            'id_currency_proyek' => $request->getPost('currency_proyek'),
            'dokumen' => $request->getPost('dokumen'),
            'dokumen_date' => $request->getPost('dokumen_date'),
            'id_pekerjaan' => $request->getPost('pekerjaan'),
            'obligee' => $request->getPost('obligee'),
            'alamat_obligee' => $request->getPost('obligee_alamat'),
            'id_jenis' => $request->getPost('jaminan_tipe'),
            'nomor' => $request->getPost('nomor'),
            'nilai_jaminan' => unformat($request->getPost('nilai')),
            'id_currency_jaminan' => $request->getPost('currency'),
            'date_from' => $request->getPost('date_from'),
            'date_to' => $request->getPost('date_to'),
            'days' => $request->getPost('days'),
            'issued_place' => $request->getPost('issued_place'),
            'issued_date' => $request->getPost('issued_date'),
            'bahasa' => $request->getPost('bahasa')
        );
        $data = array_map(function ($val) {
            return ($val == '') ? null : $val;
        }, $data);
        $row = $this->model->getTable()->where(['enkrip' => $enkripsi])->data(false);
        if ($row === null) return false;
        $change = array();
        foreach ($data as $key => $val)
            if (array_key_exists($key, $row) && $row[$key] !== $val) $change[$key] = $val;
        if (empty($change)) {
            return $change;
        } else {
            $update = $this->model->transaction(function ($db) use ($change, $enkripsi) {
                $db->table('jaminan')->update($change, ['enkripsi' => $enkripsi]);
            });
            return $update === false ? $update : $change;
        }
    }
}
