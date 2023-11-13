<?php

namespace App\Models;

class JaminanData
{
    private $model;

    public function __construct()
    {
        $this->model = new \App\Models\JaminanModel;
    }

    public function infoDashboard(): array
    {
        $data['draft'] = $this->model->getData(
            ['id', 'printed']
        )->where(
            ['active' => 1]
        )->where(
            '(jaminan_issued.printed = 0 OR jaminan_issued.printed IS NULL)'
        )->count('jaminan.id');
        $data['issued'] = $this->model->refresh()->getData(
            ['id', 'printed']
        )->where(
            ['active' => 1, 'print' => 1]
        )->count('jaminan.id');
        return $data;
    }

    public function getDetail(string $enkripsi)
    {
        $fields = array(
            'jenis', 'bahasa', 'nomor', 'nilai', 'date_from', 'date_to', 'days',
            'issued_place', 'issued_date', 'enkrip', 'currency', 'symbol', 'conditional',
            'asuransi', 'cabang', 'cabang_alamat', 'cabang_pejabat', 'cabang_jabatan',
            'principal', 'principal_alamat', 'principal_pejabat', 'principal_jabatan',
            'proyek', 'proyek_nama', 'proyek_alamat', 'proyek_nilai', 'pekerjaan_id',
            'dokumen', 'dokumen_date', 'pekerjaan', 'obligee', 'obligee_alamat',
            'issued', 'printed', 'blanko_nomor', 'cabang_id', 'jenis_id', 'proyek_id'
        );
        return $this->model->getData($fields)->where(
            ['enkrip' => $enkripsi]
        )->data(false);
    }

    public function dataPrint(string $enkripsi)
    {
        $fields = array(
            'jenis', 'nomor', 'nilai', 'currency', 'symbol', 'issued_place', 'issued_date',
            'principal', 'principal_alamat', 'asuransi_print', 'cabang_print', 'cabang_alamat',
            'principal_pejabat', 'principal_jabatan', 'cabang_pejabat', 'cabang_jabatan',
            'proyek_nama', 'proyek_nilai', 'dokumen', 'dokumen_date', 'date_from', 'date_to', 'days',
            'obligee', 'obligee_alamat', 'jenis_english', 'jenis_singkat', 'proyek_id', 'enkrip',
            'issued', 'blanko_nomor', 'prefix_print', 'blanko_print', 'asuransi_nick', 'printed',
            'jenis_id', 'conditional', 'asuransi', 'cabang_id', 'pekerjaan_id'
        );
        return $this->model->getData($fields)->where(
            ['enkrip' => $enkripsi]
        )->data(false);
    }

    public function dataInput(string $enkripsi, array $exclude = [])
    {
        $fields = array(
            'obligee', 'obligee_alamat', 'proyek_id', 'proyek_nama', 'pekerjaan_id', 'default_place',
            'proyek_alamat', 'currency_proyek_id', 'proyek_nilai', 'dokumen', 'dokumen_date',
            'jenis_id', 'nomor', 'currency_id', 'nilai', 'bahasa', 'date_from', 'date_to', 'days',
            'issued_place', 'issued_date', 'asuransi', 'cabang', 'principal', 'conditional'
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
            'nama_proyek' => nl2space($request->getPost('proyek_nama')),
            'alamat_proyek' => nl2space($request->getPost('proyek_alamat')),
            'dokumen' => nl2space($request->getPost('dokumen')),
            'dokumen_date' => $request->getPost('dokumen_date'),
            'id_pekerjaan' => $request->getPost('pekerjaan'),
            'obligee' => nl2space($request->getPost('obligee')),
            'alamat_obligee' => nl2space($request->getPost('obligee_alamat')),
            'id_jenis' => $request->getPost('jaminan_tipe'),
            'id_currency' => $request->getPost('currency'),
            'nilai_proyek' => unformat($request->getPost('proyek_nilai')),
            'nilai_jaminan' => unformat($request->getPost('nilai')),
            'conditional' => unformat($request->getPost('conditional')),
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
        $data['nomor'] = $this->_getNumber($data, $row);
        $change = array();
        foreach ($data as $key => $val)
            if (array_key_exists($key, $row) && $row[$key] !== $val) $change[$key] = $val;
        if (empty($change)) {
            return $change;
        } else {
            $logdata = array(
                'logstamp' => date('ymdHis'),
                'id_user' => userdata('id'),
                'id_tipe' => 212,
                'data_id18' => $row['id']
            );
            $update = $this->model->transaction(function ($db) use ($change, $enkripsi, $logdata) {
                $db->table('jaminan')->update($change, ['enkripsi' => $enkripsi]);
                $db->table('user_log')->insert($logdata);
            });
            return $update === false ? $update : $change;
        }
    }

    private function _getNumber(array $data, array $row): ?string
    {
        $model = new \App\Models\JaminanNumber;
        $model->setCabang($model->getCabang($row['id_asuransi_people'] ?? ''))
            ->setIssueDate($data['issued_date'])
            ->setJenis($data['id_jenis'])->setProyek($data['id_proyek'])
            ->isKonstruksi($data['id_pekerjaan'] === null ? null : ($data['id_pekerjaan'] == '110'))
            ->isConditional($data['conditional'] === null ? null : ($data['conditional'] == '1'));
        return $model->getNomor();
    }

    public function blankoUse(?string $params)
    {
        $apidata = $this->_apiData($params);
        if ($apidata === null) {
            return false;
        } else {
            $jaminan = $apidata['jaminan'];
            $data = $apidata['data'];
            $apiLib = new \App\Libraries\Api();
            $apiResult = $apiLib->blankoUse($jaminan['blankoprint_id'], $data);
            if ($apiResult->all) {
                $updates = $this->model->transaction(function ($db) use ($jaminan) {
                    $db->table('jaminan_blanko')->update(
                        ['status' => 'USED'],
                        ['id_blanko' => $jaminan['blankoprint_id']]
                    );
                    $db->table('jaminan_issued')->update(
                        ['printed' => 1],
                        ['id_jaminan' => $jaminan['id']]
                    );
                });
                return array(
                    'update' => $updates,
                    'api_blanko' => $apiResult->blanko,
                    'api_jaminan' => $apiResult->jaminan,
                    'api_used' => $apiResult->used
                );
            } else {
                return false;
            }
        }
    }

    public function blankoCrash(?string $params)
    {
        $apidata = $this->_apiData($params);
        if ($apidata === null) {
            return false;
        } else {
            $jaminan = $apidata['jaminan'];
            $data = $apidata['data'];
            $apiLib = new \App\Libraries\Api();
            $apiResult = $apiLib->blankoCrash($jaminan['blankoprint_id'], $data);
            if ($apiResult->all) {
                $blanko = $apiResult->new;
                $transactions = $this->model->transaction(function ($db) use ($jaminan, $blanko) {
                    $db->table('jaminan_blanko')->update(
                        ['status' => 'CRASH'],
                        ['id_blanko' => $jaminan['blankoprint_id']]
                    );
                    if (!empty($blanko)) {
                        $db->table('jaminan_blanko')->insert(array(
                            'id_blanko' => $blanko->id,
                            'id_jaminan' => $jaminan['id'],
                            'prefix' => $blanko->prefix,
                            'nomor' => $blanko->nomor
                        ));
                    }
                });
                return array(
                    'update' => $transactions,
                    'api_new' => $blanko,
                    'api_blanko' => $apiResult->blanko,
                    'api_jaminan' => $apiResult->jaminan,
                    'api_used' => $apiResult->used,
                    'api_crash' => $apiResult->crash
                );
            } else {
                return false;
            }
        }
    }

    private function _apiData(?string $enkrip)
    {
        $jaminan = null;
        if ($enkrip !== null) {
            $model = new \App\Models\JaminanModel;
            $jaminan = $model->getData(array(
                'id', 'jenis_id', 'nomor', 'principal_id', 'principal', 'obligee',
                'currency_id', 'nilai', 'dokumen', 'dokumen_date', 'proyek_nama',
                'date_from', 'date_to', 'days', 'blanko_nomor', 'blankoprint_id'
            ))->where(
                ['enkrip' => $enkrip]
            )->data(false);
        }
        if ($jaminan === null) {
            return null;
        } else {
            $data = array(
                'id_tipe' => substr($jaminan['jenis_id'], -1),
                'nomor' => str_replace(REGISTER_SECTION, $jaminan['blanko_nomor'], $jaminan['nomor']),
                'id_principal' => $jaminan['principal_id'],
                'principal' => $jaminan['principal'],
                'obligee' => $jaminan['obligee'],
                'id_currency' => $jaminan['currency_id'],
                'nilai' => $jaminan['nilai'],
                'kontrak' => $jaminan['dokumen'],
                'pekerjaan' => $jaminan['proyek_nama'],
                'apply_date' => $jaminan['date_from'],
                'end_date' => $jaminan['date_to'],
                'apply_days' => $jaminan['days'],
                'user' => userdata('id'),
                'office' => userdata('office_id')
            );
            $docDate = fdate($jaminan['dokumen_date'], 'DD1 MM3 YY2');
            if ($docDate !== null) $data['kontrak'] .= ' tanggal ' . $docDate;
            return array('jaminan' => $jaminan, 'data' => $data);
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
