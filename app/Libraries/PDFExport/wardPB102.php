<?php

namespace App\Libraries\PDFExport;

class wardPB102 extends ExportWardingPDF
// Performance Bond - Swasta
{
    public function __construct(array $data = [])
    {
        parent::__construct();
        $this->setDefaultFont('Arial', 9);
        $this->setPageSize('LETTER');
        $this->setData($data);
        $this->_content();
    }

    private function _content()
    {
    }
}
