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
        $this->titleNumber = 'Nomor Bond';
        $this->footTipe = 2;
    }

    public function content()
    {
        $this->setPoint('Dengan ini dinyatakan, bahwa kami <b>' . $this->data('principal') . '</b>, ' . $this->data('principal_alamat') . ' sebagai Supplier, selanjutnya disebut <b>PRINCIPAL</b>, dan <b>' . $this->data('asuransi_print') . $this->data('cabang_print', ' $1') . '</b> ' . $this->data('cabang_alamat') . ' sebagai Penjamin, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada <b>' . $this->data('obligee') . '</b>, ' . $this->data('obligee_alamat') . ' sebagai Pemilik, selanjutnya disebut <b>OBLIGEE</b> atas uang sejumlah <b>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . '</b> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi>.');
        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran maksimal jumlah tersebut di atas dengan baik dan benar bilamana <b>PRINCIPAL</b> tidak memenuhi kewajiban sebagaimana ditetapkan dalam instruksi kepada Peserta Lelang untuk pekerjaan <b>' . $this->data('proyek_nama') . '</b> yang diselenggarakan oleh <b>OBLIGEE</b> pada tanggal __TANGGAL_PROYEK__ di __ALAMAT_PROYEK__.');
        $this->setPoint('Adapun ketentuan dari Surat Jaminan ini adalah jika :', array(
            '<b>PRINCIPAL</b> menarik kembali Penawarannya sebelum berakhirnya masa laku Penawaran yang dinyatakan dalam Formulir Penawaran,',
            'Penawaran <b>PRINCIPAL</b> disetujui oleh <b>OBLIGEE</b> dalam masa laku Penawaran, dan <b>PRINCIPAL</b> telah :' . PHP_EOL . '(i) menyerahkan Jaminan Pelaksanaan yang diperlukan,' . PHP_EOL . '(ii) menandatangani Kontrak,' . PHP_EOL . '(iii) menandatangi dokumen perikatan lainnya sebagaimana yang diharuskan dalam Dokumen Lelang, atau',
            '<b>PRINCIPAL</b> gagal melaksanakan ketentuan seperti tersebut pada butir b diatas, dan telah membayar kepada <b>OBLIGEE</b> selisih (tidak melebihi nilai jaminan) antara perbedaan penawarannya dari penawaran yang lebih besar berikutnya, dimana <b>OBLIGEE</b> menunjuk kontraktor yang berikut itu untuk melaksanakan pekerjaan yang ditawarkannya,'
        ), 'maka Jaminan ini menjadi batal dan tidak berlaku; sebaliknya jika tidak terjadi hal-hal seperti tersebut pada butir a, b dan c di atas maka Jaminan ini tetap berlaku dan efektif mulai dari tanggal <b>' . fdate($this->data('date_from'), 'DD1 MM3 YY2') . '</b> sampai dengan <b>' . fdate($this->data('date_to'), 'DD1 MM3 YY2') . '</b>.');
        $this->setPoint('Tuntunan penagihan (klaim) atas surat jaminan ini dilaksanakan oleh <b>OBLIGEE</b> secara tertulis kepada <b>SURETY</b> segera setelah timbul cidera janji (Wanprestasi/default) oleh pihak <b>PRINCIPAL</b> sesuai dengan ketentuan-ketentuan dalam Dokumen Lelang.' . PHP_EOL . '<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> jumlah yang sesungguhnya diderita olehnya maksimum sebesar nilai jaminan tersebut di atas, selambat-lambatnnya 30 (Tiga Puluh) hari kalender setelah menerima tuntutan penagihan dari pihak <b>OBLIGEE</b> berdasar Keputusan <b>OBLIGEE</b> mengenai pengenaan sanksi akibat tindakan cidera janji oleh <b>PRINCIPAL</b>.');
        $this->setPoint('Menunjuk pada pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>SURETY</b> melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam pasal 1831 KUH Perdata.');
        $this->setPoint('Setiap pengajuan ganti rugi terhadap <b>SURETY</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (Tiga Puluh) hari kalender sesudah berakhirnya masa berlaku jaminan ini.');
        $this->setContent();
        return $this;
    }
}

/*

<b>'.$this->data('dokumen').'</b>'.$this->data('dokumen_date',' tanggal <b>$1</b>',function($date){return fdate($date,'DD1 MM3 YY2');}).'

<b>'.$this->data('days').' ('.$this->terbilang('days').')</b>

'.$this->conditional().'

*/
