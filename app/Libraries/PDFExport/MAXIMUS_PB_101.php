<?php

namespace App\Libraries\PDFExport;

class MAXIMUS_PB_101 extends ExportWardingPDF
// Performance Bond - Pemerintah
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami <b>' . $this->data('principal') . '</b>, ' . $this->data('principal_alamat') . ' sebagai Penyedia selanjutnya disebut <b>TERJAMIN</b> dan <b>' . $this->data('asuransi_print') . $this->data('cabang_print', ' $1') . '</b>, ' . $this->data('cabang_alamat') . ' sebagai Penjamin selanjutnya disebut sebagai <b>PENJAMIN</b> bertanggung jawab dan dengan tegas terikat pada <b>' . $this->data('obligee') . '</b>, ' . $this->data('obligee_alamat') . ' sebagai Pemilik Pekerjaan selanjutnya disebut <b>PENERIMA JAMINAN</b> atas uang sejumlah <b>' . $this->data('currency_2') . ' ' . nformat($this->data('nilai')) . '</b> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi>.');
        $this->setPoint('Maka kami <b>TERJAMIN</b> dan <b>PENJAMIN</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut di atas dengan baik dan benar bilamana <b>TERJAMIN</b> tidak memenuhi kewajiban dalam melaksanakan <b>' . $this->data('proyek_nama') . '</b> sebagaimana ditetapkan berdasarkan <b>' . $this->data('dokumen') . '</b>' . $this->data('dokumen_date', ' tanggal <b>$1</b>', function ($date) {
            return fdate($date, 'DD1 MM3 YY2');
        }) . '.');
        $this->setPoint('Surat Jaminan ini berlaku selama <b>' . $this->data('days') . ' (' . $this->terbilang('days') . ')</b> hari kalender dan efektif mulai dari tanggal <b>' . fdate($this->data('date_from'), 'DD1 MM3 YY2') . '</b> sampai dengan tanggal <b>' . fdate($this->data('date_to'), 'DD1 MM3 YY2') . '</b>.');
        $this->setPoint('Jaminan ini berlaku apabila :', array(
            '<b>TERJAMIN</b> tidak menyelesaikan pekerjaan tersebut pada waktunya dengan baik dan benar sesuai dengan ketentuan dalam kontrak.',
            'Pemutusan kontrak akibat kesalahan <b>TERJAMIN</b>.'
        ));
        $this->setPoint('<b>PENJAMIN</b> akan membayar kepada <b>PENERIMA JAMINAN</b> sejumlah nilai jaminan tersebut di atas dalam waktu paling lambat 14 (Empat Belas) hari kerja tanpa syarat <i>(UNCONDITIONAL)</i> setelah menerima tuntutan pencairan secara tertulis dari <b>PENERIMA JAMINAN</b> berdasar Keputusan <b>PENERIMA JAMINAN</b> mengenai pengenaan sanksi akibat <b>TERJAMIN</b> cidera janji.');
        $this->setPoint('Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>PENJAMIN</b> melepaskan hak-hak istimewa untuk menuntut supaya harta benda <b>TERJAMIN</b> lebih dahulu disita dan dijual guna dapat melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');
        $this->setPoint('Tuntutan pencairan terhadap <b>PENJAMIN</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (Tiga Puluh) hari kalender sesudah berakhirnya masa berlaku Jaminan ini.');
        $this->setContent();
        return $this;
    }
}
