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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami : <b> ' . $this->data('principal') . ' </b>, Alamat : ' . $this->data('principal_alamat') . ' sebagai Penyedia, selanjutnya disebut <b>TERJAMIN</b>, dan <b>' . $this->data('asuransi_print') . ' </b>,   berkedudukan di Alamat :  ' . $this->data('cabang_alamat') . '</bi>sebagai penjamin, selanjutnya disebut <b>PENJAMIN</b>, bertanggung jawab dan dengan tegas terikat pada <b> ' . $this->data('obligee') . ' </b>,' . $this->data('obligee_alamat') . ' sebagai pemilik pekerjaan, selanjutnya disebut <b>PENERIMA JAMINAN</b> atas uang sejumlah <bi>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . ' </bi> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi>');
        $this->setPoint('Maka kami, <b>TERJAMIN</b> dan <b>PENJAMIN</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut diatas dengan baik dan benar bilamana <b>TERJAMIN</b> tidak memenuhi kewajiban dalam melaksanakan pekerjaan <b>' . $this->data('proyek_nama') . '</b> yang telah dipercaya kepadanya atas dasar Surat Perjanjian (Kontrak) dari <b>PENERIMA JAMINAN</b> <b>' . $this->data('dokumen') . '</b>');
        $this->setPoint('Surat Jaminan ini berlaku selama <bi>60 (ENAM PULUH ) hari</bi> kalender dan efektif mulai dari tanggal <b>' . $this->data('date_from') . ' sampai dengan tanggal  ' . $this->data('date_to') . '.</b>');
        $this->setPoint('Jaminan ini dicairkan apabila :');
        $this->setPoint('<b>TERJAMIN</b> tidak memenuhi kewajibannya melakukan pembayaran kembali kepada <b>PENERIMA JAMINAN</b> senilai Uang Muka yang wajib di bayar menurut Dokumen Kontrak.');
        $this->setPoint('<b>PENJAMIN</b> akan membayar kepada <b>PENERIMA JAMINAN</b> sejumlah nilai jaminan tersebut diatas atau sisa Uang Muka yang belum dikembalikan <b>TERJAMIN</b> dalam waktu paling lambat <bi>14(empat belas) hari </bi> kerja tanpa syarat (Unconditional) setelah menerima tuntutan pencairan secara tertulis dari <b>PENERIMA JAMINAN</b> berdasar Keputusan <b>PENERIMA JAMINAN</b> mengenai pengenaan sanksi akibat <b>TERJAMIN</b> cidera janji/wanprestasi. Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>PENJAMIN</b> melepaskan hak-hak istimewa untuk menuntut supaya harta benda <b>TERJAMIN</b> lebih dahulu disita dan dijual guna dapat melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata');
        $this->setPoint('Tuntutan pencairan terhadap <b>PENJAMIN</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu </bi>30(tiga puluh) hari</bi> kalender sesudah berakhirnya masa berlaku Jaminan ini.');
        $this->setContent();
        return $this;
    }
}
