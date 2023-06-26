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
            'dokumen', 'dokumen_date', 'pekerjaan', 'obligee', 'obligee_alamat',
            'issued', 'printed', 'blanko_nomor'
        );
        return $this->model->getData($fields)->where(
            ['enkrip' => $enkripsi]
        )->data(false);
    }

    public function dataPrint(string $enkripsi)
    {
        $fields = array(
            'jenis', 'nomor', 'nilai', 'currency', 'currency_2', 'issued_place', 'issued_date',
            'principal', 'principal_alamat', 'asuransi_print', 'cabang_print', 'cabang_alamat',
            'principal_pejabat', 'principal_jabatan', 'cabang_pejabat', 'cabang_jabatan',
            'proyek_nama', 'dokumen', 'dokumen_date', 'date_from', 'date_to', 'days',
            'obligee', 'obligee_alamat', 'jenis_singkat', 'proyek_id',
            'issued', 'blanko_nomor', 'prefix_print', 'blanko_print'
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
        $nomor = nl2space($request->getPost('nomor'));
        if (strpos($nomor, REGISTER_SECTION) === false) $nomor .= REGISTER_SECTION;
        $data = array(
            'id_proyek' => $request->getPost('proyek'),
            'nama_proyek' => nl2space($request->getPost('proyek_nama')),
            'alamat_proyek' => nl2space($request->getPost('proyek_alamat')),
            'nilai_proyek' => unformat($request->getPost('proyek_nilai')),
            'id_currency_proyek' => $request->getPost('currency_proyek'),
            'dokumen' => nl2space($request->getPost('dokumen')),
            'dokumen_date' => $request->getPost('dokumen_date'),
            'id_pekerjaan' => $request->getPost('pekerjaan'),
            'obligee' => nl2space($request->getPost('obligee')),
            'alamat_obligee' => nl2space($request->getPost('obligee_alamat')),
            'id_jenis' => $request->getPost('jaminan_tipe'),
            'nomor' => $nomor,
            'nilai_jaminan' => unformat($request->getPost('nilai')),
            'id_currency_jaminan' => $request->getPost('currency'),
            'date_from' => $request->getPost('date_from'),
            'date_to' => $request->getPost('date_to'),
            'days' => $request->getPost('days'),
            'issued_place' => nl2space($request->getPost('issued_place')),
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

    public function inforceProcess(array $jaminan)
    {
        $blankodata = array();
        $jaminanids = array();
        $marked = array();
        if (!empty($jaminan)) {
            $jaminan = $this->_sort($jaminan);
            $apiblanko = new \App\Libraries\Api();
            foreach ($jaminan as $jam) {
                $apidata = $apiblanko->blankoAvailable(
                    $jam['asuransi'],
                    sizeof($jam['jaminan'])
                );
                if (sizeof($apidata) === sizeof($jam['jaminan'])) {
                    foreach ($apidata as $key => $api) {
                        $blankodata[] = array(
                            'id_blanko' => $api->id,
                            'id_jaminan' => $jam['jaminan'][$key],
                            'prefix' => $api->prefix,
                            'nomor' => $api->nomor
                        );
                        $jaminanids[] = $jam['jaminan'][$key];
                        $marked[] = $api->id;
                    }
                }
            }
        }
        if (!empty($blankodata)) {
            $trans_result = $this->model->transaction(function ($db) use ($blankodata, $jaminanids) {
                $db->table('jaminan_blanko')->insertBatch($blankodata);
                $db->table('jaminan_issued')->set(array(
                    'issued' => 1, 'issued_stamp' => create_id(0)
                ))->whereIn('id_jaminan', $jaminanids)->update();
            });
            $apiMark = $apiblanko->blankoMark($marked);
            $mark_result = $apiMark !== false && $apiMark->rows === sizeof($marked);
            if ($trans_result && $mark_result) {
                // all success
                return 1;
            } else {
                // not match
                return 2;
            }
        } else {
            // blanko empty
            return 0;
        }
        // empty jaminan
        return 3;
    }

    private function _sort(array $jaminan)
    {
        $data = array();
        foreach ($jaminan as $jam) {
            $asuransi = $jam['asuransi_id'];
            foreach ($data as &$new) {
                if ($new['asuransi'] == $asuransi) {
                    $new['jaminan'][] = $jam['id'];
                    continue 2;
                }
            }
            $data[] = array(
                'asuransi' => $asuransi,
                'jaminan' => array($jam['id'])
            );
        }
        unset($new);
        return $data;
    }
}
