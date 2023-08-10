<?php

namespace App\Libraries\PDFExport;

class MAXIMUS_BB_102 extends ExportWardingPDF
// Bid Bond - Swasta
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami <b>' . $this->data('principal') . '</b>, ' . $this->data('principal_alamat') . ' sebagai kontraktor, selanjutnya disebut <b>PRINCIPAL</b>, dan <b>' . $this->data('asuransi_print') . $this->data('cabang_print', ' $1') . '</b>, ' . $this->data('cabang_alamat') . ' sebagai <b>PENJAMIN</b>, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada <b>' . $this->data('obligee') . '</b>, ' . $this->data('obligee_alamat') . ' sebagai pemilik, selanjutnya disebut <b>OBLIGEE</b> atas uang sejumlah <b>' . $this->data('currency_2') . ' ' . nformat($this->data('nilai')) . '</b> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi>.');
        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut di atas dengan baik dan benar bilamana <b>PRINCIPAL</b> tidak memenuhi kewajiban sebagaimana ditetapkan dalam <b>' . $this->data('dokumen') . '</b>' . $this->data('dokumen_date', ' tanggal <b>$1</b>', function ($date) {
            return fdate($date, 'DD1 MM3 YY2');
        }) . ' untuk pekerjaan <b>' . $this->data('proyek_nama') . '</b> yang diselenggarakan oleh <b>OBLIGEE</b>.');
        $this->setPoint('Adapun ketentuan dari Surat Jaminan ini adalah :', array(
            'Jika <b>PRINCIPAL</b> menarik kembali penawarannya sebelum berakhirnya masa laku penawaran yang dinyatakan dalam penawarannya, atau',
            array(
                'Jika penawaran <b>PRINCIPAL</b> disetujui oleh <b>OBLIGEE</b> dalam masa laku penawaran, dan <b>PRINCIPAL</b> telah :',
                'Menyerahkan Jaminan Pelaksanaan yang diperlukan.',
                'Menandatangani kontrak, dan',
                'Hadir dalam klarifikasi.',
                'Menandatangi dokumen perikatan lain sebagaimana yang diharuskan dalam dokumen lelang maka Jaminan ini menjadi batal dan tidak berlaku, sebaliknya jika tidak terjadi hal-hal seperti tersebut pada butir a dan b diatas maka Surat Jaminan ini tetap berlaku dan efektif mulai tanggal <b>' . fdate($this->data('date_from'), 'DD1 MM3 YY2') . '</b> sampai dengan <b>' . fdate($this->data('date_to'), 'DD1 MM3 YY2') . '</b>.'
            )
        ));
        $this->setPoint('Tuntutan penagihan (klaim) atas Surat Jaminan ini dilaksanakan oleh <b>OBLIGEE</b> secara tertulis kepada <b>SURETY</b> segera setelah timbul cedera janji (wanprestasi/default) oleh pihak <b>PRINCIPAL</b> sesuai dengan ketentuan-ketentuan dalam dokumen lelang.');
        $this->setPoint('<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> sejumlah nilai jaminan tersebut diatas selambat-lambatnya 30 (Tiga Puluh) hari kalender setelah menerima tuntutan penagihan dari pihak <b>OBLIGEE</b> berdasarkan keputusan <b>OBLIGEE</b> mengenai pengenaan sanksi akibat tindakan cidera janji oleh pihak <b>PRINCIPAL</b>.');
        $this->setPoint('<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> sejumlah nilai jaminan tersebut diatas dalam waktu paling lambat 14 (Empat Belas) hari kerja dengan syarat <i>(CONDITIONAL)</i> setelah menerima tuntutan pencairan secara tertulis dari <b>OBLIGEE</b> berdasar Keputusan <b>OBLIGEE</b> mengenai pengenaan sanksi akibat <b>SURETY</b> cidera janji.');
        $this->setPoint('Menunjuk pada pasal 1831 KUH Perdata dengan ini ditegaskan kembali kepada bahwa <b>SURETY</b> menggunakan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');
        $this->setPoint('Setiap pengajuan ganti rugi terhadap <b>SURETY</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 1 (Satu) bulan sesudah berakhirnya masa Jaminan ini.');
        $this->footTipe = 2;
        $this->setContent();
        return $this;
    }
}
