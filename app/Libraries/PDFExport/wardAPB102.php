<?php

namespace App\Libraries\PDFExport;

class wardAPB102 extends ExportWardingPDF
// Advance Payment Bond - Swasta
{
    public function __construct(array $data = [])
    {
        parent::__construct();
        $this->setDefaultFont('Arial', 9);
        $this->setPageSize('LETTER');
        $this->setData($data);
    }

    public function content()
    {
        return $this;
    }
}
