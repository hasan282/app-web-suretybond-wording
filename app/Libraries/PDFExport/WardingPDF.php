<?php

namespace App\Libraries\PDFExport;

use App\Libraries\PDFMake;

class WardingPDF extends PDFMake
{
    private $points, $number, $data;

    public function __construct()
    {
        parent::__construct();
        $this->number = 1;
        $this->points = array();
        $this->data = array();
    }

    protected function data(string $key)
    {
        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        } else {
            return null;
        }
    }

    protected function setData(array $data)
    {
        $this->data = $data;
    }

    protected function setContent(array $content = [])
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
                    'body' => $this->_content()
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

    protected function setPoint(string $text, ?array $subpoint = [])
    {
        if (empty($subpoint) || $subpoint === null) {
            $this->points[] = array(
                $this->number . '.',
                array(
                    'colSpan' => 2,
                    'text' => $this->parse($text),
                    'alignment' => 'justify'
                )
            );
        } else {
            $ol = array();
            foreach ($subpoint as $sp) $ol[] = $this->parse($sp);
            $this->points[] = array(
                $this->number . '.',
                array(
                    'colSpan' => 2,
                    'stack' => array(
                        $this->parse($text),
                        array(
                            'type' => 'lower-alpha',
                            'ol' => $ol
                        )
                    ),
                    'alignment' => 'justify'
                )
            );
        }
        $this->number++;
    }

    private function _content()
    {
        $content = array();
        $head = array(
            '',
            array(
                'stack' => array(
                    array(
                        'text' => $this->parse('Nomor Jaminan : <b>' . $this->data('nomor') . '</b>'),
                        'fontSize' => 10
                    ),
                    array(
                        'text' => ' ',
                        'fontSize' => 5
                    )
                )
            ),
            array(
                'text' => $this->parse('Nilai : <b>' . $this->data('currency_2') . ' ' . nformat($this->data('nilai')) . '</b>'),
                'alignment' => 'right',
                'fontSize' => 10
            )
        );
        $foot = array(
            '',
            array(
                'colSpan' => 2,
                'stack' => array(
                    $this->parse('Dikeluarkan di <b>Bogor</b>'),
                    $this->parse('Pada tanggal <b>24 Februari 2023</b>')
                )
            )
        );
        $content[] = $head;
        foreach ($this->points as $pt) $content[] = $pt;
        $content[] = $foot;
        return $content;
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
