<?php

namespace App\Controllers;

class Content extends BaseController
{
    public function index($section, $page)
    {
        $functions = array(
            'draft' => 'guaranteeDraft',
            'issued' => 'guaranteeIssued'
        );
        if (in_array($section, array_keys($functions))) {
            $tables = new \App\Libraries\Tables;
            return $this->response->setJSON($tables->{$functions[$section]}($page));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
