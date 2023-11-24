<?php

namespace App\Libraries\Wordings;

class BUMIDA_MB2_NKC extends BaseWording
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami __PRINCIPAL__, __PRINCIPAL_ALAMAT__, sebagai Peserta, selanjutnya disebut <b>PRINCIPAL</b>, dan __ASURANSI__ __ASURANSI_ALAMAT__ sebagai Penjamin, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada __OBLIGEE__ __OBLIGEE_ALAMAT__, sebagai Pemilik, selanjutnya disebut <b>OBLIGEE</b> atas uang sejumlah __NILAI__.');
        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran maksimal jumlah tersebut diatas bilamana pihak <b>PRINCIPAL</b> tidak memenuhi kewajibannya melaksanakan pekerjaan pemeliharaan sebagaimana telah ditetapkan dalam __DOKUMEN__ dalam hal pekerjaan __PROYEK_NAMA__ antara pihak <b>PRINCIPAL</b> dan <b>OBLIGEE</b>, dan kontrak tersebut merupakan bagian yang tidak terpisahkan dari Jaminan ini.', array('Tuntutan penagihan (klaim) atas Surat Jaminan ini dilaksanakan oleh <b>OBLIGEE</b> secara tertulis kepada <b>SURETY</b> segera setelah timbul cidera janji (wanprestasi/default) oleh pihak <b>PRINCIPAL</b> dalam melaksanakan pemeliharaan sesuai dengan ketentuan-ketentuan dalam kontrak tersebut di atas dan bukan karena force majeure serta dinyatakan secara tertulis oleh <b>OBLIGEE</b>.', '<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> sesuai kerugian yang diderita Obligee maksimum sejumlah nilai jaminan tersebut di atas selambat-lambatnya 30 (Tiga Puluh) hari kalender setelah menerima surat tuntutan penagihan (klaim). Besarnya klaim yang akan dibayar oleh <b>SURETY</b> adalah sesuai dengan jumlah biaya yang diperlukan untuk memperbaiki kerusakan yang terjadi selama masa pemeliharaan dengan maksimum pembayaran sebesar nilai jaminan.'));
        $this->setPoint('Surat Jaminan ini berlaku selama __DAYS__ kalender dan efektif mulai dari tanggal __DATE_FROM__ sampai dengan tanggal __DATE_TO__.');
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
