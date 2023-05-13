<?php

namespace App\Libraries;

class ExportPDF
{
    private $pdf, $font;

    public function __construct()
    {
        $this->pdf = array(
            'pageOrientation' => 'potrait',
            'pageSize' => 'LETTER',
            'pageMargins' => array(65, 86, 65, 10),
            'defaultStyle' => array(
                'font' => 'TimesNewRoman',
                'fontSize' => 9
            )
        );
        $this->font = array(
            'TimesNewRoman' => array(
                'normal' => base_url('asset/font/times.ttf'),
                'bold' => base_url('asset/font/timesbd.ttf'),
                'italics' => base_url('asset/font/timesi.ttf'),
                'bolditalics' => base_url('asset/font/timesbi.ttf')
            )
        );
    }
}
