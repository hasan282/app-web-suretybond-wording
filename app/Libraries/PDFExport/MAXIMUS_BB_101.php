<?php

namespace App\Libraries\PDFExport;

class MAXIMUS_BB_101 extends ExportWardingPDF
// Bid Bond - Pemerintah
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami <b>' . $this->data('principal') . '</b>, ' . $this->data('principal_alamat') . ' sebagai Peserta, selanjutnya disebut <b>TERJAMIN</b>, dan <b>' . $this->data('asuransi_print') . $this->data('cabang_print', ' $1') . '</b>, ' . $this->data('cabang_alamat') . ' sebagai Penjamin, selanjutnya disebut sebagai <b>PENJAMIN</b>, bertanggung jawab dan dengan tegas terikat pada <b>' . $this->data('obligee') . '</b>, ' . $this->data('obligee_alamat') . ' sebagai pelaksana tender <b>' . $this->data('proyek_nama') . '</b> berdasarkan dokumen <b>' . $this->data('dokumen') . '</b>' . $this->data('dokumen_date', ' tanggal <b>$1</b>', function ($date) {
            return fdate($date, 'DD1 MM3 YY2');
        }) . ' atas uang sejumlah <b>' . $this->data('currency_2') . ' ' . nformat($this->data('nilai')) . '</b> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi>.');
        $this->setPoint('Maka kami, <b>TERJAMIN</b> dan <b>PENJAMIN</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut di atas dengan baik dan benar bilamana <b>TERJAMIN</b> tidak memenuhi ketentuan yaitu :', array(
            'Terlibat korupsi, kolusi, dan/atau nepotisme.',
            'Menarik kembali penawaran selama dilaksanakannya tender.',
            'Tidak bersedia menambah nilai jaminan pelaksanaan dalam hal sebagai calon pemenang dan calon pemenang cadangan 1 dan 2 harga penawarannya di bawah 80% HPS.',
            'Tidak hadir dalam klarifikasi dan/atau verifikasi kualifikasi dalam hal sebagai calon pemenang dan calon pemenang cadangan 1 dan 2 dengan alasan yang tidak dapat diterima, atau.',
            'Mengundurkan diri atau gagal tanda tangan kontrak.'
        ));
        $this->setPoint('Surat Jaminan ini berlaku selama <b>' . $this->data('days') . ' (' . $this->terbilang('days') . ')</b> hari kalender dan efektif mulai tanggal <b>' . fdate($this->data('date_from'), 'DD1 MM3 YY2') . '</b> sampai dengan tanggal <b>' . fdate($this->data('date_to'), 'DD1 MM3 YY2') . '</b>.');
        $this->setPoint('<b>PENJAMIN</b> akan membayar kepada <b>PENERIMA JAMINAN</b> sejumlah nilai jaminan tersebut di atas dalam waktu paling lambat 14 (Empat Belas) hari kerja tanpa syarat <i>(UNCONDITIONAL)</i> setelah menerima tuntutan penagihan secara tertulis dari <b>PENERIMA JAMINAN</b> berdasar keputusan <b>PENERIMA JAMINAN</b> mengenai pengenaan sanksi akibat <b>TERJAMIN</b> cidera janji/wanprestasi.');
        $this->setPoint('Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>PENJAMIN</b> melepaskan hak-hak istimewa untuk menuntut supaya harta benda <b>TERJAMIN</b> lebih dahulu disita dan dijual guna dapat melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');
        $this->setPoint('Tuntutan pencairan terhadap <b>PENJAMIN</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (Tiga Puluh) hari kalender sesudah berakhirnya masa berlaku Jaminan ini.');
        $this->setContent();
        return $this;
    }
}
