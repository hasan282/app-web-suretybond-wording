<?php

namespace App\Libraries\PDFExport;

class GonvPB extends WardingPDF
{
    public function __construct(array $data = [])
    {
        parent::__construct();
        $this->setDefaultFont('Arial', 9);
        $this->setPageSize('LETTER');
        $this->setData($data);
        $this->_PerformanceBond_Gonverment();
    }

    private function _PerformanceBond_Gonverment()
    {
        $this->setPoint('Dengan ini dinyatakan, bahwa kami <b>' . $this->data('principal') . '</b>, ' . $this->data('principal_alamat') . ' sebagai Penyedia selanjutnya disebut <b>TERJAMIN</b> dan <b>PT. ASURANSI MAXIMUS GRAHA PERSADA Tbk, Kantor Cabang Bogor</b>, Ruko VIP No. 88 B Jl. Raya Pajajaran, Bogor 16128 sebagai Penjamin selanjutnya disebut sebagai <b>PENJAMIN</b> bertanggung jawab dan dengan tegas terikat pada <b>PEJABAT PEMBUAT KOMITMEN KORPS BRIMOB POLRI</b>, Jl. Komjen Pol M Jasin Kelapa Dua Depok sebagai Pemilik Pekerjaan selanjutnya disebut <b>PENERIMA JAMINAN</b> atas uang sejumlah <b>' . $this->data('currency_2') . ' ' . nformat($this->data('nilai')) . '</b> <bi>(Sembilan Puluh Sembilan Juta Sembilan Ratus Empat Puluh Ribu ' . $this->data('currency') . ')</bi>.');
        $this->setPoint('Maka kami <b>TERJAMIN</b> dan <b>PENJAMIN</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut di atas dengan baik dan benar bilamana <b>TERJAMIN</b> tidak memenuhi kewajiban dalam melaksanakan <b>Pekerjaan Pengadaan Makan dan Ekstra Fooding Pelatihan Pertempuran Hutan (Jungle Warfare) Gelombang I dan II di Satlat Brimob T.A. 2023</b> sebagaimana ditetapkan berdasarkan <b>Surat Penunjukan Penyedia Barang / Jasa No.: B/31/II/LOG.4.21./2023</b> Tanggal 9 Februari 2023');
        $this->setPoint('Surat Jaminan ini berlaku selama <b>194 (Seratus Sembilan Puluh Empat)</b> hari kalender dan efektif mulai dari tanggal <b>24 Februari 2023</b> sampai dengan tanggal <b>5 September 2023</b>');
        $this->setPoint('Jaminan ini berlaku apabila :', array(
            '<b>TERJAMIN</b> tidak menyelesaikan pekerjaan tersebut pada waktunya dengan baik dan benar sesuai dengan ketentuan dalam Kontrak.',
            'Pemutusan kontrak akibat kesalahan <b>TERJAMIN</b>.'
        ));
        $this->setPoint('<b>PENJAMIN</b> akan membayar kepada <b>PENERIMA JAMINAN</b> sejumlah nilai jaminan tersebut di atas dalam waktu paling lambat 14 (empat belas) hari kerja tanpa syarat <i>(UNCONDITIONAL)</i> setelah menerima tuntutan pencairan secara tertulis dari <b>PENERIMA JAMINAN</b> berdasar Keputusan <b>PENERIMA JAMINAN</b> mengenai pengenaan sanksi akibat <b>TERJAMIN</b> cidera janji.');
        $this->setPoint('Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>PENJAMIN</b> melepaskan hak-hak istimewa untuk menuntut supaya harta benda <b>TERJAMIN</b> lebih dahulu disita dan dijual guna dapat melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');
        $this->setPoint('Tuntutan pencairan terhadap <b>PENJAMIN</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (tiga puluh) hari kalender sesudah berakhirnya masa berlaku Jaminan ini.');
        $this->setContent();
    }
}
