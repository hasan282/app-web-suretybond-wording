<?php

namespace App\Libraries\Wordings;

class BUMIDA_PB3_KUC extends BaseWording
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami : __PRINCIPAL__ , Alamat : __PRINCIPAL_ALAMAT__ sebagai Kontraktor, selanjutnya disebut <b>PRINCIPAL</b>, dan __ASURANSI__ Alamat : __ASURANSI_ALAMAT__ sebagai  Penjamin, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada __OBLIGEE__ , Alamat : __OBLIGEE_ALAMAT__ sebagai Pemilik, selanjutnya disebut <b>OBLIGEE</b> atas uang sejumlah __NILAI__.');
        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran maksimal jumlah tersebut di atas dengan baik dan benar bilamana <b>PRINCIPAL</b> tidak memenuhi kewajibannya dalam melaksanakan Pekerjaan __PROYEK_NAMA__ yang telah dipercayakan kepadanya atas dasar Surat Pemenang Lelang dari <b>OBLIGEE</b> No. 21/-1.826.1 tanggal 4 Februari 2014 yang selanjutnya dikukuhkan dalam  Kontrak  No.25/-1.826.1   tanggal 14 Februari 2014 antara pihak <b>PRINCIPAL</b> dan <b>OBLIGEE</b>, dan kontrak tersebut merupakan bagian yang tidak terpisahkan dari Jaminan ini.
        Surat Jaminan ini berlaku selama <b>106 (SERATUS ENAM ) hari</b> kalender dan efektif mulai dari tanggal __DATE_FROM__ sampai dengan tanggal __DATE_TO__.');
        $this->setPoint('Jaminan ini berlaku apabila :', array('a. <b>PRINCIPAL</b> tidak menyelesaikan pekerjaan tersebut pada waktunya dengan baik dan benar sesuai dengan ketentuan kontrak ; ' . PHP_EOL . 'b. Pemutusan kontrak akibat kesalahan <b>PRINCIPAL</b>.'), '');
        $this->setPoint('<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> sejumlah nilai jaminan tersebut di atas dalam waktu paling lambat <b>14 (empat belas) hari kerja</b> tanpa syarat setelah menerima tuntutan pencairan secara tertulis dari <b>OBLIGEE</b> berdasar keputusan <b>OBLIGEE</b> mengenai pengenaan sanksi akibat <b>PRINCIPAL</b> cidera janji.');
        $this->setPoint('Menunjuk pada pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>SURETY</b> melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam pasal 1831 KUH Perdata Tuntutan pencairan terhadap <b>SURETY</b> berdasarkan jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu <b>30 (tiga puluh) hari</b> kalender sesudah berakhirnya masa berlaku Jaminan ini.');
        $this->setContent();
        return $this;
    }
}
