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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami : __PRINCIPAL__ , Alamat : __PRINCIPAL_ALAMAT__ sebagai <b>PESERTA</b>, selanjutnya disebut <b>PRINCIPAL</b>, dan __ASURANSI__ Alamat : __ASURANSI_ALAMAT__ sebagai  Penjamin, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada __OBLIGEE__ , alamat __OBLIGEE_ALAMAT__ sebagai Pemilik, selanjutnya disebut 
        <b>OBLIGEE</b> atas uang sejumlah __NILAI__.');
        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut di atas dengan baik dan benar bilamana <b>PRINCIPAL</b> tidak memenuhi kewajiban sebagaimana ditetapkan dalam Dokumen    , Tanggal  untuk melaksanakan pelelangan pekerjaan __PROYEK_NAMA__ sesuai Berita Acara Rapat Penjelasan (Aanwijzing) tanggal __ISSUED_DATE__ yang diselenggarakan oleh <b>OBLIGEE.</b>');
        $this->setPoint('Surat Jaminan ini berlaku apabila <b>PRINCIPAL</b> :');
        $this->setPoint('menarik kembali Penawarannya selama dilaksanakannya pelelangan atau sesudah di nyatakan sebagai pemenang;', array(' a. Tidak  : ' . PHP_EOL . 'b. <b>(i)</b> hadir dalam klarifikasi dan / atau verifikasi kualifikasi dalam hal pelelangan dilakukan dengan Pascakualifikasi ; atau ' . PHP_EOL . '<b>(ii)</b>   menyerahkan Jaminan Pelaksanaan setelah ditunjuk sebagai pemenang. ' . PHP_EOL . 'c. Terlibat Korupsi, Kolusi dan Nepotisme (KKN) ; atau Melakukan penipuan / pemalsuan atas informasi yang disampaikan dalam Dokumen Penawaran d.'), ' ');
        $this->setPoint('Surat Jaminan ini berlaku selama <b>59 (LIMA PULUH SEMBILAN ) hari</b> kalender dan efektif mulai dari tanggal __DATE_FROM__ sampai dengan tanggal __DATE_TO__. <b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> sejumlah nilai jaminan tersebut di atas dalam waktu paling lambat <b>14 (empat belas) hari</b> kerja tanpa syarat (Unconditional) setelah menerima tuntutan penagihan secara tertulis dari <b>OBLIGEE</b> berdasar Keputusan <b>OBLIGEE</b> mengenai pengenaan sanksi akibat <b>PRINCIPAL</b> cidera janji/wanprestasi.');
        $this->setPoint('Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>SURETY</b> melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');
        $this->setPoint('Setiap pengajuan ganti rugi terhadap <b>SURETY</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu <b>30 (tiga puluh) hari</b> kalender sesudah berakhirnya masa laku Jaminan ini.');
        $this->setContent();
        return $this;
    }
}
