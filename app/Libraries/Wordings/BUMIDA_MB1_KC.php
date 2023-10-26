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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami :  <b>' . $this->data('principal') . '</b> Alamat : ' . $this->data('principal_alamat') . ' ,  sebagai Kontraktor, selanjutnya disebut <b>PRINCIPAL</b>, dan <b>' . $this->data('asuransi_print') . '</b> Alamat : ' . $this->data('cabang_alamat') . ' sebagai Penjamin, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada <b>' . $this->data('obligee') . '</b> ,Alamat : ' . $this->data('obligee_alamat') . ' ,  sebagai Pemilik, selanjutnya disebut <b>OBLIGEE</b>, atas uang sejumlah  <bi>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . ' </bi> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi>.');
        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran maksimal jumlah tersebut diatas bilamana pihak <b>PRINCIPAL</b> tidak memenuhi kewajibannya melaksanakan pekerjaan pemeliharaan sebagaimana telah ditetapkan dalam <b>' . $this->data('dokumen') . '</b> dalam hal pekerjaan <b>' . $this->data('proyek_nama') . '</b>, tanggal <b>' . $this->data('issued_date') . '</b>  antara pihak <b>PRINCIPAL</b> dan <b>OBLIGEE</b>, dan kontrak tersebut merupakan bagian yang tidak terpisahkan dari Jaminan ini.');
        $this->setPoint('Adapun ketentuan dari Surat Jaminan ini adalah jika <b>PRINCIPAL</b> telah melaksanakan kewajibannya melakukan pemeliharaan sebagaimana ditetapkan di dalam kontrak tersebut di atas, maka Jaminan ini menjadi tidak berlaku; sebaliknya jika tidak, maka Jaminan ini tetap berlaku untuk jangka waktu dari saat penyerahan pertama tanggal <b>' . $this->data('date_from') . '</b> sampai dengan saat penyerahan kedua tanggal <b>' . $this->data('date_to') . '</b> dengan syarat-syarat berikut ini. A. Tuntutan penagihan (klaim) atas Surat Jaminan ini dilaksanakan oleh <b>OBLIGEE</b> secara tertulis kepada <b>SURETY</b> segera setelah timbul cidera janji (wanprestasi/default) oleh pihak <b>PRINCIPAL</b> dalam melaksanakan pemeliharaan sesuai dengan ketentuan-ketentuan dalam kontrak tersebut di atas dan bukan karena kebijakan moneter serta dinyatakan secara tertulis oleh <b>OBLIGEE</b>. <b>SURETY</b> dapat membayar kepada <b>OBLIGEE</b> maksimum sejumlah nilai jaminan tersebut di atas selambat-lambatnya <b>30 (tiga puluh) hari</b> kalender setelah menerima surat tuntutan penagihan (klaim). Besarnya klaim yang akan dibayar oleh <b>SURETY</b> adalah sesuai dengan jumlah biaya yang diperlukan untuk memperbaiki kerusakan yang terjadi selama masa pemeliharaan dengan maksimum pembayaran sebesar nilai jaminan. B.');
        $this->setPoint('Tuntutan penagihan (klaim) atas surat Jaminan ini dilaksanakan oleh <b>OBLIGEE</b> secara tertulis kepada <b>SURETY</b> segera setelah timbul cidera janji (wanprestasi/default) oleh pihak <b>PRINCIPAL</b> dalam melaksanakan pemeliharaan sesuai dengan ketentuan-ketentuan dalam kontrak tersebut di atas dan bukan karena force majeure serta dinyatakan secara tertulis oleh <b>OBLIGEE</b>. <b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> sesuai dengan kerugian yang diderita oleh Obligee maksium sejumlah nilai jaminan tersebut di atas selambat-lambatnya <b>30 (tiga puluh) hari</b> kalender setelah menerima surat tuntutan penagihan (klaim). Besarnya klaim yang akan dibayar oleh <b>SURETY</b> adalah sesuai dengan jumlah biaya yang diperlukan untuk memperbaiki kerusakan yang terjadi selama masa pemeliharaan dengan maximum pembayaran sebesar nilai jaminan. Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>SURETY</b> melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');
        $this->setPoint('Setiap pengajuan ganti rugi terhadap <b>SURETY</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu <b>30 (tiga puluh) hari</b> kalender sesudah berakhirnya masa laku Jaminan ini.');
        $this->setContent();
        return $this;
    }
}
