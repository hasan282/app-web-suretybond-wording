<?php

namespace App\Libraries\Wordings;

class BUMIDA_BB1_KC extends BaseWording
{
    public function __construct(array $data = [])
    {
        parent::__construct();
        $this->setDefaultFont('Arial', 9);
        $this->setPageSize('LETTER');
        $this->setData($data);
    }
    public function content()
    {
        $this->setPoint('Dengan ini dinyatakan, bahwa kami : <b> PT. ' . $this->data('principal') . ', </b> Alamat : ' . $this->data('principal_alamat') . ' sebagai Suplier, selanjutnya disebut <b>PRINCIPAL</b>, dan <b>' . $this->data('asuransi_print') . '</b> Alamat : ' . $this->data('cabang_alamat') . ' sebagai  Penjamin, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada <b>' . $this->data('obligee') . '</b>, alamat ' . $this->data('obligee_alamat') . ' sebagai Pemilik, selanjutnya disebut <b>OBLIGEE</b> atas uang sejumlah <bi>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . ' </bi> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi>');
        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran maksimal jumlah tersebut di atas dengan baik dan benar bilamana <b>PRINCIPAL</b> tidak memenuhi kewajiban sebagaimana ditetapkan dalam instruksi kepada Peserta Lelang untuk pekerjaan <bi>PAKET PEKERJAAN INTERIOR FURNITURE KITCHEN</bi> yang diselenggarakan oleh <b>OBLIGEE</b> pada tanggal <bi>11 Mei 2015 di Rukan Offfice Lt.4 Jl.XXX Kelapa Gading - Jakarta Utara </bi>');
        $this->setPoint('Adapun ketentuan dari Surat Jaminan ini adalah jika :<b>PRINCIPAL</b> menarik kembali Penawarannya sebelum berakhirnya masa laku Penawaran yang dinyatakan dalam Formulir Penawaran,Penawaran <b>PRINCIPAL</b> disetujui oleh <b>OBLIGEE</b> dalam masa laku Penawaran, dan <b>PRINCIPAL</b> telah : <b>(i)</b> menyerahkan Jaminan Pelaksanaan yang diperlukan, <b>(ii)</b> menandatangani Kontrak, <b>(iii)</b> menandatangi dokumen perikatan lainnya sebagaimana yang diharuskan dalam Dokumen Lelang, atau c. <b>PRINCIPAL</b> gagal melaksanakan ketentuan seperti tersebut pada butir b diatas, dan telah membayar kepada <b>OBLIGEE</b> selisih (tidak melebihi nilai jaminan) antara perbedaan penawarannya dari penawaran yang lebih besar berikutnya, dimana <b>OBLIGEE</b> menunjuk kontraktor yang berikut itu untuk melaksanakan pekerjaan yang ditawarkannya, maka Jaminan ini menjadi batal dan tidak berlaku; sebaliknya jika tidak terjadi hal-hal seperti tersebut pada butir a, b dan c di atas maka Jaminan ini tetap berlaku dan efektif mulai dari tanggal <b>' . $this->data('date_from') . ' sampai dengan ' . $this->data('date_to') . '</b>');
        $this->setPoint('Tuntunan penagihan (klaim) atas surat jaminan ini dilaksanakan oleh <b>OBLIGEE</b> secara tertulis kepada <b>SURETY</b> segera setelah timbul cidera janji (Wanprestasi/default) oleh pihak <b>PRINCIPAL</b> sesuai dengan ketentuan-ketentuan dalam Dokumen Lelang. <b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> jumlah yang sesungguhnya diderita olehnya maksimum sebesar nilai jaminan tersebut di atas, selambat-lambatnnya <b>30 (tiga puluh) hari</b> kalender setelah menerima tuntutan penagihan dari pihak <b>OBLIGEE</b> berdasar Keputusan <b>OBLIGEE</b> mengenai pengenaan sanksi akibat tindakan cidera janji oleh <b>PRINCIPAL.</b>');
        $this->setPoint('Menunjuk pada pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>SURETY</b> melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam pasal 1831 KUH Perdata.');
        $this->setPoint('Setiap pengajuan ganti rugi terhadap <b>SURETY</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu <b>30 (tiga puluh) hari</b> kalender sesudah berakhirnya masa laku jaminan ini.');
        $this->setPoint('Ditandatangani serta dibubuhi materai di  <b>' . $this->data('issued_place') . '</b> pada tanggal <b>' . $this->data('issued_date') . '</b> PRINCIPAL <b>' . $this->data('principal') . '</b> SURETY <b>' . $this->data('asuransi_print') . '</b>');
        $this->setContent();
        return $this;
    }
}
