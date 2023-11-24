<?php

namespace App\Libraries\Wordings;

class BUMIDA_MB4_NKUC extends BaseWording
{
    public function __construct(array $data = [])
    {
        parent::__construct();
        $this->setDefaultFont('Arial', 9);
        $this->setPageSize('LETTER');
        $this->setData($data);
        $this->footTipe = 2;
    }

    public function content()
    {
        $this->setPoint('Dengan ini dinyatakan, bahwa kami __PRINCIPAL__, __PRINCIPAL_ALAMAT__, sebagai Penyedia, selanjutnya disebut <b>PRINCIPAL</b>, dan __ASURANSI__ __ASURANSI_ALAMAT__ sebagai Penjamin, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada __OBLIGEE__, __OBLIGEE_ALAMAT__, sebagai Pemilik, selanjutnya disebut <b>OBLIGEE</b> atas uang sejumlah __NILAI__.');
        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut diatas dengan baik dan benar bilamana <b>PRINCIPAL</b> tidak memenuhi kewajibannya melaksanakan pekerjaan __PROYEK_NAMA__ yang telah dipercayakan kepadanya atas dasar Surat dari <b>OBLIGEE</b> __DOKUMEN__.');
        $this->setPoint('Adapun ketentuan dari Surat Jaminan ini adalah jika <b>PRINCIPAL</b> telah melaksanakan kewajibannya melakukan pemeliharaan sebagaimana ditetapkan di dalam kontrak tersebut di atas, maka Jaminan ini menjadi tidak berlaku; sebaliknya jika tidak, maka Jaminan ini tetap berlaku untuk jangka waktu dari saat penyerahan pertama tanggal __DATE_FROM__ sampai dengan saat penyerahan kedua tanggal __DATE_TO__.');
        $this->setPoint('<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> sejumlah nilai jaminan tersebut di atas dalam waktu paling lambat 14 (Empat Belas) hari kerja tanpa syarat setelah menerima tuntutan pencairan secara tertulis dari <b>OBLIGEE</b> berdasarkan keputusan <b>OBLIGEE</b> mengenai pengenaan sanksi akibat <b>PRINCIPAL</b> cidera janji.');
        $this->setPoint('Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>SURETY</b> melepaskan hak-hak istimewanya untuk menuntut supaya harta benda <b>PRINCIPAL</b> lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');
        $this->setPoint('Tuntutan pencairan terhadap <b>SURETY</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (tiga puluh) hari kalender sesudah berakhirnya masa laku Jaminan ini.');
        $this->setContent();
        return $this;
    }
}

/*

<b>'.$this->data('principal').'</b>

'.$this->data('principal_alamat').'

<b>'.$this->data('asuransi_print').$this->data('cabang_print',' $1').'</b>

'.$this->data('cabang_alamat').'

<b>'.$this->data('obligee').'</b>

'.$this->data('obligee_alamat').'

<b>'.$this->data('symbol').' '.nformat($this->data('nilai')).'</b> <bi>('.$this->terbilang('nilai').' '.$this->data('currency').')</bi>

<b>'.$this->data('proyek_nama').'</b>

<b>'.$this->data('dokumen').'</b>'.$this->data('dokumen_date',' tanggal <b>$1</b>',function($date){return fdate($date,'DD1 MM3 YY2');}).'

<b>'.$this->data('days').' ('.$this->terbilang('days').')</b>

<b>'.fdate($this->data('date_from'),'DD1 MM3 YY2').'</b>

<b>'.fdate($this->data('date_to'),'DD1 MM3 YY2').'</b>

'.$this->conditional().'

*/
