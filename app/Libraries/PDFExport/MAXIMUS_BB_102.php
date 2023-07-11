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

        $this->setPoint('Dengan ini dinyatakan, bahwa kami __PRINCIPAL__, __ADDR_PRINCIPAL__ sebagai Kontraktor, selanjutnya disebut <b>PRINCIPAL</b>, dan __ASURANSI__, __ADDR_ASURANSI__ sebagai <b>PENJAMIN</b>, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada __OBLIGEE__, __ADDR_OBLIGEE__ sebagai pemilik, selanjutnya disebut <b>OBLIGEE</b> atas uang sejumlah __NILAI__ __TERBILANG__.');

        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut di atas dengan baik dan benar bilamana <b>PRINCIPAL</b> tidak memenuhi kewajiban sebagaimana ditetapkan dalam Instruksi kepada peserta lelang sebagaimana ditetapkan dalam __DOKUMEN__ untuk pekerjaan __PEKERJAAN__ yang diselenggarakan oleh <b>OBLIGEE</b>.');

        $this->setPoint('Adapun ketentuan dari Surat Jaminan ini adalah :', array(
            'Jika <b>PRINCIPAL</b> menarik kembali penawarannya sebelum berakhirnya masa laku penawaran yang dinyatakan dalam penawarannya, atau',
            array(
                'Jika penawaran <b>PRINCIPAL</b> disetujui oleh <b>OBLIGEE</b> dalam masa laku penawaran, dan <b>PRINCIPAL</b> telah :',
                'Menyerahkan Jaminan Pelaksanaan yang diperlukan.',
                'Menandatangani Kontrak, dan',
                'Hadir dalam klarifikasi.',
                'Menandatangi dokumen perikatan lain sebagaimana yang diharuskan dalam Dokumen Lelang maka Jaminan ini menjadi batal dan tidak berlaku, sebaliknya jika tidak terjadi hal-hal seperti tersebut pada butir a dan b diatas maka Surat Jaminan ini tetap berlaku dan efektif mulai tanggal __DATE_FROM__ sampai dengan __DATE_TO__.'
            )
        ));

        $this->setPoint('Tuntutan penagihan (Klaim) atas Surat Jaminan ini dilaksanakan oleh <b>OBLIGEE</b> secara tertulis kepada <b>SURETY</b> segera setelah timbul cedera janji (Wanprestasi/default) oleh pihak <b>PRINCIPAL</b> sesuai dengan ketentuan-ketentuan dalam Dokumen Lelang.');

        $this->setPoint('<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> sejumlah nilai jaminan tersebut diatas selambat-lambatnya 30 (Tiga Puluh) hari kalender setelah menerima tuntutan penagihan dari pihak <b>OBLIGEE</b> berdasarkan keputusan <b>OBLIGEE</b> mengenai pengenaan sanksi akibat tindakan cidera janji oleh pihak <b>PRINCIPAL</b>.');

        $this->setPoint('<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> sejumlah nilai jaminan tersebut diatas dalam waktu paling lambat 14 (Empat Belas) hari kerja dengan syarat (CONDITIONAL) setelah menerima tuntutan pencairan secara tertulis dari <b>OBLIGEE</b> berdasar Keputusan <b>OBLIGEE</b> mengenai pengenaan sanksi akibat <b>SURETY</b> cidera janji.');

        $this->setPoint('Menunjuk pada pasal 1831 KUH Perdata dengan ini ditegaskan kembali kepada bahwa <b>SURETY</b> menggunakan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');

        $this->setPoint('Setiap pengajuan ganti rugi terhadap <b>SURETY</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 1 (Satu) bulan sesudah berakhirnya masa Jaminan ini.');
        $this->footTipe = 2;
        $this->setContent();
        return $this;
    }
}
