<?php

namespace App\Libraries;

class Tables
{
    public function guaranteeDraft(int $page = 1)
    {
        $dataList = array();


        return (object) [
            'page_now' => 1,
            'page_max' => 25,
            'count' => 572,
            'limit' => 10,
            'content' => nl2space(view('guarantee/table_draft'))
        ];
    }
}
