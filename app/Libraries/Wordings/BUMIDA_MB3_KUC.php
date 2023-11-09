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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami :  <b>' . $this->data('principal') . '</b> Alamat : ' . $this->data('principal_alamat') . ', sebagai Kontraktor, selanjutnya disebut <b>PRINCIPAL</b>, dan <b>' . $this->data('asuransi_print') . '</b> Alamat : ' . $this->data('cabang_alamat') . ' sebagai Penjamin, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada <b>' . $this->data('obligee') . '</b>, Alamat : ' . $this->data('obligee_alamat') . ' ,  sebagai Pemilik, selanjutnya disebut <b>OBLIGEE</b>, atas uang sejumlah  <bi>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . ' </bi> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi>. Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut diatas dengan baik dan benar.Bilamana <b>PRINCIPAL</b> tidak memenuhi kewajibannya melaksanakan pekerjaan <b>' . $this->data('proyek_nama') . '</b> yang telah dipercayakan kepadanya atas dasar Surat dari <b>OBLIGEE</b> <b>' . $this->data('dokumen') . '</b> tanggal <b>' . $this->data('issued_date') . ' </b>');
        $this->setPoint('Adapun ketentuan dari Surat Jaminan ini adalah jika <b>PRINCIPAL</b> telah melaksanakan kewajibannya melakukan pemeliharaan sebagaimana ditetapkan di dalam kontrak tersebut di atas, maka Jaminan ini menjadi tidak berlaku; sebaliknya jika tidak, maka Jaminan ini tetap berlaku untuk jangka waktu dari saat penyerahan pertama tanggal <b>' . $this->data('date_from') . '</b> sampai dengan saat penyerahan kedua tanggal <b>' . $this->data('date_to') . ' </b>.');
        $this->setPoint('<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> sejumlah nilai jaminan tersebut di atas dalam waktu paling lambat <b>14 (empat belas) hari</b> kerja tanpa syarat setelah menerima tuntutan pencairan secara tertulis dari <b>OBLIGEE</b> berdasarkan keputusan <b>OBLIGEE</b> mengenai pengenaan sanksi akibat <b>PRINCIPAL</b> cidera janji.');
        $this->setPoint('Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>SURETY</b> melepaskan hak-hak istimewanya untuk menuntut supaya harta benda <b>PRINCIPAL</b> lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');
        $this->setPoint('Tuntutan pencairan terhadap <b>SURETY</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu <b>30 (tiga puluh) hari</b> kalender sesudah berakhirnya masa laku Jaminan ini.
        ');
        $this->setContent();
        return $this;
    }
}
