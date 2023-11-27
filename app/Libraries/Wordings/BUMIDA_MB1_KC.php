<?php

namespace App\Libraries\Wordings;

class BUMIDA_MB1_KC extends BaseWording
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami <b>' . $this->data('principal') . '</b>, ' . $this->data('principal_alamat') . ' sebagai Kontraktor, selanjutnya disebut <b>PRINCIPAL</b>, dan <b>' . $this->data('asuransi_print') . $this->data('cabang_print', ' $1') . '</b>' . $this->data('cabang_alamat') . ' sebagai Penjamin, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada <b>' . $this->data('obligee') . '</b> ' . $this->data('obligee_alamat') . ', sebagai Pemilik, selanjutnya disebut <b>OBLIGEE</b>, atas uang sejumlah <b>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . '</b> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi>.');
        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran maksimal jumlah tersebut diatas bilamana pihak <b>PRINCIPAL</b> tidak memenuhi kewajibannya melaksanakan pekerjaan pemeliharaan sebagaimana telah ditetapkan dalam <b>' . $this->data('dokumen') . '</b> dalam hal pekerjaan <b>' . $this->data('proyek_nama') . '</b>, tanggal __PROYEK_DATE__ antara pihak <b>PRINCIPAL</b> dan <b>OBLIGEE</b>, dan kontrak tersebut merupakan bagian yang tidak terpisahkan dari Jaminan ini.');
        $this->setPoint('Adapun ketentuan dari Surat Jaminan ini adalah jika <b>PRINCIPAL</b> telah melaksanakan kewajibannya melakukan pemeliharaan sebagaimana ditetapkan di dalam kontrak tersebut di atas, maka Jaminan ini menjadi tidak berlaku; sebaliknya jika tidak, maka Jaminan ini tetap berlaku untuk jangka waktu dari saat penyerahan pertama tanggal <b>' . fdate($this->data('date_from'), 'DD1 MM3 YY2') . '</b> sampai dengan saat penyerahan kedua tanggal <b>' . fdate($this->data('date_to'), 'DD1 MM3 YY2') . '</b> dengan syarat-syarat berikut ini.', array('Tuntutan penagihan (klaim) atas Surat Jaminan ini dilaksanakan oleh <b>OBLIGEE</b> secara tertulis kepada <b>SURETY</b> segera setelah timbul cidera janji (wanprestasi/default) oleh pihak <b>PRINCIPAL</b> dalam melaksanakan pemeliharaan sesuai dengan ketentuan-ketentuan dalam kontrak tersebut di atas dan bukan karena kebijakan moneter serta dinyatakan secara tertulis oleh <b>OBLIGEE</b>.', '<b>SURETY</b> dapat membayar kepada <b>OBLIGEE</b> maksimum sejumlah nilai jaminan tersebut di atas selambat-lambatnya 30 (Tiga Puluh) hari kalender setelah menerima surat tuntutan penagihan (klaim). Besarnya klaim yang akan dibayar oleh <b>SURETY</b> adalah sesuai dengan jumlah biaya yang diperlukan untuk memperbaiki kerusakan yang terjadi selama masa pemeliharaan dengan maksimum pembayaran sebesar nilai jaminan.'));
        $this->setPoint('Tuntutan penagihan (klaim) atas surat Jaminan ini dilaksanakan oleh <b>OBLIGEE</b> secara tertulis kepada <b>SURETY</b> segera setelah timbul cidera janji (wanprestasi/default) oleh pihak <b>PRINCIPAL</b> dalam melaksanakan pemeliharaan sesuai dengan ketentuan-ketentuan dalam kontrak tersebut di atas dan bukan karena force majeure serta dinyatakan secara tertulis oleh <b>OBLIGEE</b>.' . PHP_EOL . '<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> sesuai dengan kerugian yang diderita oleh Obligee maksium sejumlah nilai jaminan tersebut di atas selambat-lambatnya 30 (Tiga Puluh) hari kalender setelah menerima surat tuntutan penagihan (klaim). Besarnya klaim yang akan dibayar oleh <b>SURETY</b> adalah sesuai dengan jumlah biaya yang diperlukan untuk memperbaiki kerusakan yang terjadi selama masa pemeliharaan dengan maximum pembayaran sebesar nilai jaminan.');
        $this->setPoint('Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>SURETY</b> melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');
        $this->setPoint('Setiap pengajuan ganti rugi terhadap <b>SURETY</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (Tiga Puluh) hari kalender sesudah berakhirnya masa laku Jaminan ini.');
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
