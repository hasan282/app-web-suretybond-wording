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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami : <b>' . $this->data('principal') . '</b>, Alamat : ' . $this->data('principal_alamat') . ' sebagai <b>PESERTA</b>, selanjutnya disebut <b>PRINCIPAL</b>, dan <b>' . $this->data('asuransi_print') . '</b> Alamat : ' . $this->data('cabang_alamat') . ' sebagai  Penjamin, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada <b>' . $this->data('obligee') . '</b>, alamat ' . $this->data('obligee_alamat') . ' sebagai Pemilik, selanjutnya disebut 
        <b>OBLIGEE</b> atas uang sejumlah <bi>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . ' </bi> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi>');
        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut di atas dengan baik dan benar bilamana <b>PRINCIPAL</b> tidak memenuhi kewajiban sebagaimana ditetapkan dalam Dokumen    , Tanggal  untuk melaksanakan pelelangan pekerjaan <b>' . $this->data('proyek_nama') . '</b> sesuai Berita Acara Rapat Penjelasan (Aanwijzing) tanggal <b>' . $this->data('issued_date') . '</b> yang diselenggarakan oleh <b>OBLIGEE.</b>');
        $this->setPoint('Surat Jaminan ini berlaku apabila <b>PRINCIPAL</b> :');
        $this->setPoint('menarik kembali Penawarannya selama dilaksanakannya pelelangan atau sesudah di nyatakan sebagai pemenang; a. Tidak  : b. <b>(i)</b> hadir dalam klarifikasi dan / atau verifikasi kualifikasi dalam hal pelelangan dilakukan dengan Pascakualifikasi ; atau <b>(ii)</b>   menyerahkan Jaminan Pelaksanaan setelah ditunjuk sebagai pemenang. c. Terlibat Korupsi, Kolusi dan Nepotisme (KKN) ; atau Melakukan penipuan / pemalsuan atas informasi yang disampaikan dalam Dokumen Penawaran d.');
        $this->setPoint('Surat Jaminan ini berlaku selama <b>59 (LIMA PULUH SEMBILAN ) hari</b> kalender dan efektif mulai dari tanggal <b>' . $this->data('date_from') . '</b> sampai dengan tanggal <b>' . $this->data('date_to') . '</b>. <b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> sejumlah nilai jaminan tersebut di atas dalam waktu paling lambat <b>14 (empat belas) hari</b> kerja tanpa syarat (Unconditional) setelah menerima tuntutan penagihan secara tertulis dari <b>OBLIGEE</b> berdasar Keputusan <b>OBLIGEE</b> mengenai pengenaan sanksi akibat <b>PRINCIPAL</b> cidera janji/wanprestasi.');
        $this->setPoint('Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>SURETY</b> melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');
        $this->setPoint('Setiap pengajuan ganti rugi terhadap <b>SURETY</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu <b>30 (tiga puluh) hari</b> kalender sesudah berakhirnya masa laku Jaminan ini.');
        $this->setContent();
        return $this;
    }
}
