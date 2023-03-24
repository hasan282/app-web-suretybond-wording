<?php

namespace App\Controllers;

class Content extends BaseController
{
    public function index($page = 1)
    {
        $tables = new \App\Libraries\Tables;
        return $this->response->setJSON($tables->guaranteeDraft($page));
    }
}
