<?php

namespace App\Libraries\Wordings;

class BUMIDA_APB3_KUC extends BaseWording
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami __PRINCIPAL__, __PRINCIPAL_ALAMAT__ sebagai Penyedia, selanjutnya disebut <b>TERJAMIN</b>, dan __ASURANSI__, berkedudukan di __ASURANSI_ALAMAT__ sebagai penjamin, selanjutnya disebut <b>PENJAMIN</b>, bertanggung jawab dan dengan tegas terikat pada __OBLIGEE__, __OBLIGEE_ALAMAT__ sebagai pemilik pekerjaan, selanjutnya disebut <b>PENERIMA JAMINAN</b> atas uang sejumlah __NILAI__.');
        $this->setPoint('Maka kami, <b>TERJAMIN</b> dan <b>PENJAMIN</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut diatas dengan baik dan benar bilamana <b>TERJAMIN</b> tidak memenuhi kewajiban dalam melaksanakan pekerjaan __PROYEK_NAMA__ yang telah dipercaya kepadanya atas dasar __DOKUMEN__ dari <b>PENERIMA JAMINAN</b>.');
        $this->setPoint('Surat Jaminan ini berlaku selama __DAYS__ kalender dan efektif mulai dari tanggal __DATE_FROM__ sampai dengan tanggal __DATE_TO__.');
        $this->setPoint('Jaminan ini dicairkan apabila :' . PHP_EOL . '<b>TERJAMIN</b> tidak memenuhi kewajibannya melakukan pembayaran kembali kepada <b>PENERIMA JAMINAN</b> senilai Uang Muka yang wajib di bayar menurut Dokumen Kontrak.');
        $this->setPoint('<b>PENJAMIN</b> akan membayar kepada <b>PENERIMA JAMINAN</b> sejumlah nilai jaminan tersebut diatas atau sisa Uang Muka yang belum dikembalikan <b>TERJAMIN</b> dalam waktu paling lambat 14 (Empat Belas) hari kerja __CONDITIONAL__ setelah menerima tuntutan pencairan secara tertulis dari <b>PENERIMA JAMINAN</b> berdasar Keputusan <b>PENERIMA JAMINAN</b> mengenai pengenaan sanksi akibat <b>TERJAMIN</b> cidera janji/wanprestasi.');
        $this->setPoint('Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>PENJAMIN</b> melepaskan hak-hak istimewa untuk menuntut supaya harta benda <b>TERJAMIN</b> lebih dahulu disita dan dijual guna dapat melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');
        $this->setPoint('Tuntutan pencairan terhadap <b>PENJAMIN</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (Tiga Puluh) hari kalender sesudah berakhirnya masa berlaku Jaminan ini.');
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
