<?php

namespace App\Libraries;

class Tables
{
    public function guaranteeDraft(int $page = 1)
    {
        $model = new \App\Models\DataModel();
        $data['list'] = $model->dataJaminan();

        return (object) [
            'page_now' => $page,
            'page_max' => 25,
            'count' => 572,
            'limit' => 10,
            'content' => nl2space(view('guarantee/table_draft', $data))
        ];
    }

    public function clientPrincipal(int $page = 1)
    {
        return (object) [
            'page_now' => $page,
            'page_max' => 3,
            'count' => 27,
            'limit' => 10,
            'content' => nl2space(view('client/table_principal'))
        ];
    }

    public function footNavs($now = 1, $max = 1)
    {
        $data = array('now' => $now, 'max' => $max);
        return view('table/nav_foot', $data);
    }
}
