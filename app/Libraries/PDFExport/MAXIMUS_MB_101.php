<?php

namespace App\Libraries\PDFExport;

class MAXIMUS_MB_101 extends ExportWardingPDF
// Maintenance Bond - Pemerintah
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami <b>' . $this->data('principal') . '</b>, ' . $this->data('principal_alamat') . ' disebut <b>TERJAMIN</b>, dan <b>' . $this->data('asuransi_print') . $this->data('cabang_print', ' $1') . '</b>, ' . $this->data('cabang_alamat') . ', sebagai <b>PENJAMIN</b>, selanjutnya disebut sebagai <b>PENJAMIN</b>, bertanggung jawab dan dengan tegas terikat pada __OBLIGEE__, __OBLIGADDRESS__ sebagai Pemilik Pekerjaan, selanjutnya disebut <b>PENERIMA JAMINAN</b> atas uang sejumlah __NILAI__ __TERBILANG__.');

        $this->setPoint('Maka kami, TERJAMIN dan PENJAMIN dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut di atas dengan baik dan benar bilamana TERJAMIN tidak memenuhi kewajiban dalam melaksanakan __PEKERJAAN__ yang telah dipercayakan kepadanya atas dasar __DOKUMEN__.');

        $this->setPoint('Surat Jaminan ini berlaku selama __DAYS__ hari kalender dan efektif mulai dari tanggal __DATEFROM__ sampai dengan tanggal __DATETO__.');

        $this->setPoint('Surat Jaminan ini berlaku apabila :' . PHP_EOL . 'TERJAMIN tidak memenuhi kewajibannya melakukan pemeliharaan sebagaimana ditentukan dalam Dokumen Kontrak.');

        $this->setPoint('PENJAMIN akan membayar kepada PENERIMA JAMINAN sejumlah nilai jaminan tersebut di atas dalam waktu paling lambat 14 (Empat Belas) hari kerja tanpa syarat (UNCONDITIONAL) setelah menerima tuntutan penagihan secara tertulis dari PENERIMA JAMINAN berdasar Keputusan PENERIMA JAMINAN mengenai pengenaan sanksi akibat TERJAMIN cidera janji / wanprestasi.');

        $this->setPoint('Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa PENJAMIN melepaskan hak-hak istimewa untuk menuntut supaya harta benda TERJAMIN lebih dahulu disita dan dijual guna dapat melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');

        $this->setPoint('Tuntutan pencairan terhadap PENJAMIN berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (Tiga Puluh) hari kalender sesudah berakhirnya masa berlaku Jaminan ini.');

        $this->setContent();
        return $this;
    }
}

/*

<b>'.$this->data('obligee').'</b>

'.$this->data('obligee_alamat').'

<b>'.$this->data('currency_2').' '.nformat($this->data('nilai')).'</b>

<bi>('.$this->terbilang('nilai').' '.$this->data('currency').')</bi>

<b>'.$this->data('proyek_nama').'</b>

<b>'.$this->data('dokumen').'</b>'.$this->data('dokumen_date',' tanggal <b>$1</b>',function($date){return fdate($date, 'DD1 MM3 YY2');}).'

<b>'.$this->data('days').' ('.$this->terbilang('days').')</b>

<b>'.fdate($this->data('date_from'),'DD1 MM3 YY2').'</b>

<b>'.fdate($this->data('date_to'),'DD1 MM3 YY2').'</b>

*/