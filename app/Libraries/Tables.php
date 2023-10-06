<?php

namespace App\Libraries;

class Tables
{
    private $now, $max, $count, $dataList;
    private $limit, $offset, $request, $get;

    public function __construct()
    {
        $this->limit = 10;
        $this->offset = 0;
        $this->request = \Config\Services::request();
        $this->get = $this->request->getGet();
    }

    public function footNavs($now = 1, $max = 1)
    {
        $data = array('now' => $now, 'max' => $max);
        return view('table/nav_foot', $data);
    }

    private function _setPage(int $page, int $dataCount)
    {
        if ($page > 0 && $dataCount > 0) {
            $this->now = $page;
            $this->count = $dataCount;
            $this->max = (int) floor($dataCount / $this->limit) +
                ($dataCount % $this->limit === 0 ? 0 : 1);
            $this->offset = ($this->now - 1) * $this->limit;
        } else {
            $this->now = 1;
            $this->max = 0;
            $this->count = 0;
        }
    }

    private function _objectReturn(string $tablePath, string $var = 'list')
    {
        $dataReturn = array(
            'page_now' => $this->now,
            'page_max' => $this->max === 0 ? 1 : $this->max,
            'count' => $this->count,
            'limit' => $this->limit
        );
        $data[$var] = $this->dataList;
        $data['pages'] = $dataReturn;
        $contentShow = (!empty($this->dataList) && $this->max > 0)
            ? view($tablePath, $data) : view('table/empty');
        $dataReturn['content'] = nl2space($contentShow);
        return (object) $dataReturn;
    }

    // ------ USER FUNCTIONS -----------------------------------------

    public function guaranteeDraft(int $page = 1)
    {
        $model = new \App\Models\JaminanModel;
        $model->getData(
            ['enkrip', 'nomor', 'symbol', 'nilai', 'jenis', 'principal', 'issued', 'blanko_nomor']
        )->where(['active' => 1])->where('(jaminan_issued.printed = 0 OR jaminan_issued.printed IS NULL)');
        $this->_setPage($page, $model->count('jaminan.id'));
        $this->dataList = $model->limit(
            $this->limit,
            $this->offset
        )->order('newest')->data();
        return $this->_objectReturn('guarantee/table/draft', 'jaminan');
    }

    public function guaranteeIssued(int $page = 1)
    {
        $model = new \App\Models\JaminanModel;
        $model->getData(array(
            'enkrip', 'prefix_print', 'blanko_print', 'nomor', 'jenis', 'principal', 'blanko_nomor'
        ))->where(['active' => 1, 'print' => 1]);
        $this->_setPage($page, $model->count('jaminan.id'));
        $this->dataList = $model->limit(
            $this->limit,
            $this->offset
        )->order('newest')->data();
        return $this->_objectReturn('guarantee/table/issued', 'jaminan');
    }

    public function clientPrincipal(int $page = 1)
    {
        $model = new \App\Models\PrincipalModel;
        $model->getData(array('enkrip', 'principal'));

        $where = array();
        $office = userdata('office_id');
        if ($office !== null) $where['office'] = $office;
        if (array_key_exists('search', $this->get)) $where['nama'] = '%' . $this->get['search'] . '%';
        if (array_key_exists('filter', $this->get)) $where['marketing'] = $this->get['filter'];

        if (!empty($where)) $model->where($where);
        $this->_setPage($page, $model->count('principal.id'));
        $this->dataList = $model->limit(
            $this->limit,
            $this->offset
        )->order('principal')->data();
        return $this->_objectReturn('client/table', 'principal');
    }

    public function inforceList(int $page = 1)
    {
        $model = new \App\Models\JaminanModel;
        $model->getData(
            ['enkrip', 'asuransi_nick', 'nilai', 'symbol', 'jenis', 'principal', 'issued']
        )->where(['active' => 1, 'issued' => 0]);
        $this->_setPage($page, $model->count('jaminan.id'));
        $this->dataList = $model->limit(
            $this->limit,
            $this->offset
        )->order('newest')->data();
        return $this->_objectReturn('inforce/table', 'jaminan');
    }
}
