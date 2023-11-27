<?php

namespace App\Libraries\Wordings;

class BUMIDA_BB4_NKUC extends BaseWording
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami <b>' . $this->data('principal') . '</b>, ' . $this->data('principal_alamat') . ' sebagai <b>PESERTA</b>, selanjutnya disebut <b>PRINCIPAL</b>, dan <b>' . $this->data('asuransi_print') . $this->data('cabang_print', ' $1') . '</b>' . $this->data('cabang_alamat') . ' sebagai  Penjamin, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada <b>' . $this->data('obligee') . '</b>, ' . $this->data('obligee_alamat') . ' sebagai Pemilik, selanjutnya disebut <b>OBLIGEE</b> atas uang sejumlah <b>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . '</b> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi>
        .');
        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut di atas dengan baik dan benar bilamana <b>PRINCIPAL</b> tidak memenuhi kewajiban sebagaimana ditetapkan dalam Dokumen <b>' . $this->data('dokumen') . '</b> untuk melaksanakan pelelangan pekerjaan <b>' . $this->data('proyek_nama') . '</b> yang diselenggarakan oleh <b>OBLIGEE</b>.');
        $this->setPoint('Surat Jaminan ini berlaku apabila <b>PRINCIPAL</b> :', array('menarik kembali Penawarannya selama dilaksanakannya pelelangan atau sesudah di nyatakan sebagai pemenang;', 'Tidak :' . PHP_EOL . '(i) hadir dalam klarifikasi dan / atau verifikasi kualifikasi dalam hal pelelangan dilakukan dengan Pascakualifikasi; atau' . PHP_EOL . '(ii) menyerahkan Jaminan Pelaksanaan setelah ditunjuk sebagai pemenang.', 'Terlibat Korupsi, Kolusi dan Nepotisme (KKN); atau', 'Melakukan penipuan / pemalsuan atas informasi yang disampaikan dalam Dokumen Penawaran.'));
        $this->setPoint('Surat Jaminan ini berlaku selama <b>' . $this->data('days') . ' (' . $this->terbilang('days') . ')</b> kalender dan efektif mulai dari tanggal <b>' . fdate($this->data('date_from'), 'DD1 MM3 YY2') . '</b> sampai dengan tanggal <b>' . fdate($this->data('date_to'), 'DD1 MM3 YY2') . '</b>.');
        $this->setPoint('<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> sejumlah nilai jaminan tersebut di atas dalam waktu paling lambat 14 (Empat Belas) hari kerja ' . $this->conditional() . ' setelah menerima tuntutan penagihan secara tertulis dari <b>OBLIGEE</b> berdasar Keputusan <b>OBLIGEE</b> mengenai pengenaan sanksi akibat <b>PRINCIPAL</b> cidera janji/wanprestasi.');
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
