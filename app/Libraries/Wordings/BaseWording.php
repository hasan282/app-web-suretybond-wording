<?php

namespace App\Libraries\Wordings;

use App\Libraries\PDFMake;

class BaseWording extends PDFMake
{
    private $points, $number, $data, $signs, $blanko, $lineHeight, $terbilang;
    protected $footTipe = 1;
    protected $titleNumber = 'Nomor Jaminan';

    public function __construct()
    {
        parent::__construct();
        $this->number = 1;
        $this->points = array();
        $this->data = array();
        $this->signs = array(
            'margin' => 10,
            'width' => 190,
            'height' => 50,
            'space' => 10
        );
        $this->blanko = false;
        $this->lineHeight = 1;
        $this->terbilang = new \App\Libraries\Terbilang;
    }

    public function setting(array $setting)
    {
        $this->setPageSize($setting['paper'] ?? 'A4');
        $this->setPageMargin(array(
            $this->_mm_to_pt(intval($setting['page_left'] ?? 60)),
            $this->_mm_to_pt(intval($setting['page_top'] ?? 60)),
            $this->_mm_to_pt(intval($setting['page_right'] ?? 60)),
            $this->_mm_to_pt(intval($setting['page_bottom'] ?? 10))
        ));
        $this->signs = array(
            'margin' => $this->_mm_to_pt(intval($setting['sign_margin'] ?? 10)),
            'width' => $this->_mm_to_pt(intval($setting['sign_width'] ?? 190)),
            'height' => $this->_mm_to_pt(intval($setting['sign_height'] ?? 50)),
            'space' => $this->_mm_to_pt(intval($setting['sign_space'] ?? 10))
        );
        $this->lineHeight = intval($setting['spacing'] ?? 100) / 100;
    }

    public function setBlanko(string $filename)
    {
        $this->blanko = true;
        $this->images = array(
            'blanko' => $filename
        );
    }

    protected function terbilang(string $key)
    {
        $data = $this->data($key);
        return $data === null ? null : $this->terbilang->terbilang($data);
    }

    protected function data(string $key, string $filter = '$1', ?callable $callback = null)
    {
        $dataReturn = null;
        if (array_key_exists($key, $this->data)) {
            $dataReturn = $this->data[$key];
        }
        if ($callback !== null && $dataReturn !== null) {
            $dataReturn = $callback($dataReturn);
        }
        if ($dataReturn !== null) {
            $dataReturn = str_replace('$1', $dataReturn, $filter);
        }
        return $dataReturn;
    }

    protected function setData(array $data)
    {
        $this->data = $data;
    }

    protected function setContent(array $content = [])
    {
        $wardingContent = array();
        if ($this->blanko) {
            $wardingContent[] = array(
                'image' => 'blanko',
                'absolutePosition' => array('x' => 1, 'y' => 1),
                'width' => $this->pageWidth
            );
        }
        $wardingContent[] = array(
            'text' => strtoupper($this->data('jenis')),
            'alignment' => 'center',
            'fontSize' => 12,
            'bold' => true,
            'margin' => [0, 0, 0, 20]
        );
        $wardingContent[] = array(
            'layout' => 'noBorders',
            'table' => array(
                'body' => $this->_content()
            )
        );
        $wardingContent[] = array(
            'layout' => 'noBorders',
            'table' => array(
                'widths' => ['*', $this->signs['width'], $this->signs['space'], $this->signs['width'], '*'],
                'heights' => [$this->signs['margin'], '*', '*', $this->signs['height'], '*'],
                'body' => $this->_signature()
            )
        );
        parent::setContent($wardingContent);
    }

    protected function setPoint(string $text, ?array $subpoint = [], ?string $endpoint = null)
    {
        $point = array(
            'colSpan' => 2,
            'alignment' => 'justify',
            'lineHeight' => $this->lineHeight
        );
        if (empty($subpoint) || $subpoint === null) {
            $point['text'] = $this->parse($text);
        } else {
            $ol = array();
            foreach ($subpoint as $sp) {
                if (is_string($sp)) $ol[] = $this->parse($sp);
                if (is_array($sp)) {
                    $subs = $sp;
                    $subzero = array_shift($subs);
                    foreach ($subs as $skey => $sval) $subs[$skey] = $this->parse($sval);
                    if (!empty($subs)) {
                        $ol[] = array(
                            $this->parse($subzero),
                            array('type' => 'lower-alpha', 'ol' => $subs)
                        );
                    }
                }
            }
            $stackpoint = array(
                $this->parse($text),
                array(
                    'type' => 'lower-alpha',
                    'ol' => $ol
                )
            );
            if ($endpoint !== null) array_push($stackpoint, $this->parse($endpoint));
            $point['stack'] = $stackpoint;
        }
        $this->points[] = array($this->number . '.', $point);
        $this->number++;
    }

    protected function conditional(?int $value = null): ?string
    {
        if (!array_key_exists('conditional', $this->data) || $this->data['conditional'] === null)
            return null;
        $condition = intval($this->data['conditional']);
        if ($value !== null) $condition = $value;
        if ($condition === 0) return 'tanpa syarat <i>(UNCONDITIONAL)</i>';
        if ($condition === 1) return 'dengan syarat <i>(CONDITIONAL)</i>';
        return null;
    }

    private function _content()
    {
        $content = array();
        $head = array(
            '',
            array(
                'stack' => array(
                    array(
                        'text' => $this->parse($this->titleNumber . ' : <b>' . $this->data('nomor') . '</b>'),
                        'fontSize' => 10
                    ),
                    array(
                        'text' => ' ',
                        'fontSize' => 5
                    )
                )
            ),
            array(
                'text' => $this->parse('Nilai : <b>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . '</b>'),
                'alignment' => 'right',
                'fontSize' => 10
            )
        );
        $content[] = $head;
        foreach ($this->points as $pt) $content[] = $pt;
        $content[] = $this->_foot($this->footTipe);
        return $content;
    }

    private function _foot(int $type): array
    {
        $foot = array(
            // tipe 1
            array(
                'key' => 'stack',
                'value' => array(
                    $this->parse('Dikeluarkan di <b>' . $this->data('issued_place') . '</b>'),
                    $this->parse('Pada tanggal <b>' . fdate($this->data('issued_date'), 'DD1 MM3 YY2') . '</b>')
                )
            ),
            // tipe 2
            array(
                'key' => 'text',
                'value' => $this->parse('Ditandatangani serta dibubuhi materai di <b>' . $this->data('issued_place') . '</b>, pada tanggal <b>' . fdate($this->data('issued_date'), 'DD1 MM3 YY2') . '</b>.')
            )
        );
        $footer = array('colSpan' => 2);
        if ($type <= sizeof($foot)) {
            $footer[$foot[$type - 1]['key']] = $foot[$type - 1]['value'];
        } else {
            $footer['text'] = '';
        }
        return array('', $footer);
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
                    'text' => $this->data('principal'),
                    'alignment' => 'center',
                    'bold' => true
                ),
                '',
                array(
                    'text' => $this->data('asuransi_print') . $this->data('cabang_print', ' $1'),
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
                            'text' => $this->data('principal_pejabat'),
                            'bold' => true,
                            'decoration' => 'underline'
                        ),
                        $this->data('principal_jabatan'),
                    ),
                    'alignment' => 'center'
                ),
                '',
                array(
                    'stack' => array(
                        array(
                            'text' => $this->data('cabang_pejabat'),
                            'bold' => true,
                            'decoration' => 'underline'
                        ),
                        $this->data('cabang_jabatan'),
                    ),
                    'alignment' => 'center'
                ),
                ''
            )
        );
    }

    private function _mm_to_pt(int $mm)
    {
        $pt = 2.83465;
        return round($mm * $pt, 2);
    }
}
