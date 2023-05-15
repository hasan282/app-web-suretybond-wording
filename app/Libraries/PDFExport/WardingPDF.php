<?php

namespace App\Libraries\PDFExport;

use App\Libraries\PDFMake;

class WardingPDF extends PDFMake
{
    protected $content;

    protected function setContent(array $content)
    {
        $wardingContent = array(
            array(
                'text' => 'JAMINAN PELAKSANAAN',
                'alignment' => 'center',
                'fontSize' => 12,
                'bold' => true,
                'margin' => [0, 0, 0, 20]
            ),
            array(
                'layout' => 'noBorders',
                'table' => array(
                    'body' => $content
                )
            ),
            array(
                'layout' => 'noBorders',
                'table' => array(
                    'widths' => [20, '*', 5, '*', 20],
                    'heights' => [10, '*', '*', 50, '*'],
                    'body' => $this->_signature()
                )
            )
        );
        parent::setContent($wardingContent);
    }

    private function _signature()
    {
        return array(
            array(
                '', '', '', '', ''
            ),
            array(
                '',
                array(
                    'text' => 'TERJAMIN',
                    'alignment' => 'center'
                ),
                '',
                array(
                    'text' => 'PENJAMIN',
                    'alignment' => 'center'
                ),
                ''
            ),
            array(
                '',
                array(
                    'text' => 'CV. GARDENIA BAYANGKARA',
                    'alignment' => 'center',
                    'bold' => true
                ),
                '',
                array(
                    'text' => 'PT. ASURANSI MAXIMUS GRAHA PERSADA Tbk, KANTOR CABANG BOGOR',
                    'alignment' => 'center',
                    'bold' => true
                ),
                ''
            ),
            array(
                '', '', '', '', ''
            ),
            array(
                '',
                array(
                    'stack' => array(
                        array(
                            'text' => 'WIWIN WIJAYANTI',
                            'bold' => true,
                            'decoration' => 'underline'
                        ),
                        'Direktur',
                    ),
                    'alignment' => 'center'
                ),
                '',
                array(
                    'stack' => array(
                        array(
                            'text' => 'RICKY FIRMANSYAH',
                            'bold' => true,
                            'decoration' => 'underline'
                        ),
                        'Branch Manager',
                    ),
                    'alignment' => 'center'
                ),
                ''
            )
        );
    }
}
