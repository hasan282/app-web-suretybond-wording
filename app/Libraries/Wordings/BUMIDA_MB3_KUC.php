<?php

namespace App\Libraries\Wordings;

class BUMIDA_MB3_KUC extends BaseWording
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami :  __PRINCIPAL__ Alamat : __PRINCIPAL_ALAMAT__ , sebagai Kontraktor, selanjutnya disebut <b>PRINCIPAL</b>, dan __ASURANSI__ Alamat : __ASURANSI_ALAMAT__ sebagai Penjamin, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada __OBLIGEE__ , Alamat : __OBLIGEE_ALAMAT__ ,  sebagai Pemilik, selanjutnya disebut <b>OBLIGEE</b>, atas uang sejumlah __NILAI__</bi>. Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut diatas dengan baik dan benar.Bilamana <b>PRINCIPAL</b> tidak memenuhi kewajibannya melaksanakan pekerjaan __PROYEK_NAMA__ yang telah dipercayakan kepadanya atas dasar Surat dari <b>OBLIGEE</b> __DOKUMEN__ tanggal __ISSUED_DATE__.');
        $this->setPoint('Adapun ketentuan dari Surat Jaminan ini adalah jika <b>PRINCIPAL</b> telah melaksanakan kewajibannya melakukan pemeliharaan sebagaimana ditetapkan di dalam kontrak tersebut di atas, maka Jaminan ini menjadi tidak berlaku; sebaliknya jika tidak, maka Jaminan ini tetap berlaku untuk jangka waktu dari saat penyerahan pertama tanggal __DATE_FROM__ sampai dengan saat penyerahan kedua tanggal __DATE_TO__.');
        $this->setPoint('<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> sejumlah nilai jaminan tersebut di atas dalam waktu paling lambat <b>14 (empat belas) hari</b> kerja tanpa syarat setelah menerima tuntutan pencairan secara tertulis dari <b>OBLIGEE</b> berdasarkan keputusan <b>OBLIGEE</b> mengenai pengenaan sanksi akibat <b>PRINCIPAL</b> cidera janji.');
        $this->setPoint('Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>SURETY</b> melepaskan hak-hak istimewanya untuk menuntut supaya harta benda <b>PRINCIPAL</b> lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');
        $this->setPoint('Tuntutan pencairan terhadap <b>SURETY</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu <b>30 (tiga puluh) hari</b> kalender sesudah berakhirnya masa laku Jaminan ini.
        ');
        $this->setContent();
        return $this;
    }
}
