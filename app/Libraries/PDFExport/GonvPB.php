<?php

namespace App\Libraries\PDFExport;

class GonvPB extends WardingPDF
{
    public function __construct()
    {
        parent::__construct();
        $this->setDefaultFont('Arial', 9);
        $this->setPageSize('LETTER');
        $this->setContent($this->_content());
    }

    private function _tableContent()
    {
        return array(
            array(
                '',
                array(
                    'stack' => array(
                        array(
                            'text' => $this->parse('Nomor Jaminan : <b>23.08.02.1105.DRAFT</b>'),
                            'fontSize' => 10
                        ),
                        array(
                            'text' => ' ',
                            'fontSize' => 5
                        )
                    )
                ),
                array(
                    'text' => $this->parse('Nilai : <b>Rp. 99.940.000,00</b>'),
                    'alignment' => 'right',
                    'fontSize' => 10
                )
            ),
            array(
                '1.',
                array(
                    'colSpan' => 2,
                    'text' => $this->parse('Dengan ini dinyatakan, bahwa kami <b>CV. GARDENIA BAYANGKARA</b>, Jl. Sonokembang Raya No. 15 A RT 07 RW 011 Kel. Bakti Jaya Kec. Sukmajaya Depok, Jawa Barat sebagai Penyedia selanjutnya disebut TERJAMIN dan PT. ASURANSI MAXIMUS GRAHA PERSADA Tbk, Kantor Cabang Bogor, Ruko VIP No. 88 B Jl. Raya Pajajaran, Bogor 16128 sebagai Penjamin selanjutnya disebut sebagai PENJAMIN bertanggung jawab dan dengan tegas terikat pada PEJABAT PEMBUAT KOMITMEN KORPS BRIMOB POLRI, Jl. Komjen Pol M Jasin Kelapa Dua Depok sebagai Pemilik Pekerjaan selanjutnya disebut PENERIMA JAMINAN atas uang sejumlah Rp. 99,940,000.00 (Sembilan Puluh Sembilan Juta Sembilan Ratus Empat Puluh Ribu Rupiah).'),
                    'alignment' => 'justify'
                )
            ),
            array(
                '2.',
                array(
                    'colSpan' => 2,
                    'text' => $this->parse('Maka kami TERJAMIN dan PENJAMIN dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut di atas dengan baik dan benar bilamana TERJAMIN tidak memenuhi kewajiban dalam melaksanakan Pekerjaan Pengadaan Makan dan Ekstra Fooding Pelatihan Pertempuran Hutan (Jungle Warfare) Gelombang I dan II di Satlat Brimob T.A. 2023 sebagaimana ditetapkan berdasarkan Surat Penunjukan Penyedia Barang / Jasa No.: B/31/II/LOG.4.21./2023 Tanggal 9 Februari 2023'),
                    'alignment' => 'justify'
                )
            ),
            array(
                '3.',
                array(
                    'colSpan' => 2,
                    'text' => $this->parse('Surat Jaminan ini berlaku selama 194 (Seratus Sembilan Puluh Empat) hari kalender dan efektif mulai dari tanggal 24 Februari 2023 sampai dengan tanggal 5 September 2023'),
                    'alignment' => 'justify'
                )
            ),
            array(
                '4.',
                array(
                    'colSpan' => 2,
                    'stack' => array(
                        $this->parse('Jaminan ini berlaku apabila :'),
                        array(
                            'type' => 'lower-alpha',
                            'ol' => array(
                                $this->parse('TERJAMIN tidak menyelesaikan pekerjaan tersebut pada waktunya dengan baik dan benar sesuai dengan ketentuan dalam Kontrak.'),
                                $this->parse('Pemutusan kontrak akibat kesalahan TERJAMIN.')
                            )
                        )
                    ),
                    'alignment' => 'justify'
                )
            ),
            array(
                '5.',
                array(
                    'colSpan' => 2,
                    'text' => $this->parse('PENJAMIN akan membayar kepada PENERIMA JAMINAN sejumlah nilai jaminan tersebut di atas dalam waktu paling lambat 14 (empat belas) hari kerja tanpa syarat (Unconditional) setelah menerima tuntutan pencairan secara tertulis dari PENERIMA JAMINAN berdasar Keputusan PENERIMA JAMINAN mengenai pengenaan sanksi akibat TERJAMIN cidera janji.'),
                    'alignment' => 'justify'
                )
            ),
            array(
                '6.',
                array(
                    'colSpan' => 2,
                    'text' => $this->parse('Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa PENJAMIN melepaskan hak-hak istimewa untuk menuntut supaya harta benda TERJAMIN lebih dahulu disita dan dijual guna dapat melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.'),
                    'alignment' => 'justify'
                )
            ),
            array(
                '7.',
                array(
                    'colSpan' => 2,
                    'text' => $this->parse('Tuntutan pencairan terhadap PENJAMIN berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (tiga puluh) hari kalender sesudah berakhirnya masa berlaku Jaminan ini.'),
                    'alignment' => 'justify'
                )
            ),
            array(
                '',
                array(
                    'colSpan' => 2,
                    'stack' => array(
                        $this->parse('Dikeluarkan di <b>Bogor</b>'),
                        $this->parse('Pada tanggal <b>24 Februari 2023</b>')
                    )
                )
            )
        );
    }

    private function _tableSignature()
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

    private function _content()
    {
        return array(
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
                    'body' => $this->_tableContent()
                )
            ),
            array(
                'layout' => 'noBorders',
                'table' => array(
                    'widths' => [20, '*', 5, '*', 20],
                    'heights' => [10, '*', '*', 50, '*'],
                    'body' => $this->_tableSignature()
                )
            )
        );
    }

    private function getPDFsss()
    {
        return array(
            'pageOrientation' => 'potrait',
            'pageSize' => 'LETTER',
            'pageMargins' => array(65, 86, 65, 10),
            'defaultStyle' => array(
                // 'font' => 'ArialNarrow',
                'font' => 'Arial',
                'fontSize' => 9
            ),
            'content' => $this->_content()
            // 'background' => 'SIMPLE TEXT'
        );
    }
}
