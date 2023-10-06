<?php

namespace App\Libraries\Wordings;

class WORDING_MB_SW extends BaseWording
// Maintenance Bond - Swasta
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami <b>' . $this->data('principal') . '</b>, ' . $this->data('principal_alamat') . ' sebagai penyedia, selanjutnya disebut <b>PRINCIPAL</b>, dan <b>' . $this->data('asuransi_print') . $this->data('cabang_print', ' $1') . '</b>, ' . $this->data('cabang_alamat') . ' sebagai <b>PENJAMIN</b>, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada <b>' . $this->data('obligee') . '</b>, ' . $this->data('obligee_alamat') . ' sebagai pemilik pekerjaan, selanjutnya disebut <b>OBLIGEE</b> atas uang sejumlah <b>' . $this->data('currency_2') . ' ' . nformat($this->data('nilai')) . '</b> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi>.');
        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut di atas dengan baik dan benar bilamana <b>PRINCIPAL</b> tidak memenuhi kewajiban dalam melaksanakan pekerjaan <b>' . $this->data('proyek_nama') . '</b> yang dipercayakan kepadanya atas dasar <b>' . $this->data('dokumen') . '</b>' . $this->data('dokumen_date', ' tanggal <b>$1</b>', function ($date) {
            return fdate($date, 'DD1 MM3 YY2');
        }) . '.');
        $this->setPoint('Surat Jaminan ini berlaku selama <b>' . $this->data('days') . ' (' . $this->terbilang('days') . ')</b> hari kalender dan efektif mulai tanggal <b>' . fdate($this->data('date_from'), 'DD1 MM3 YY2') . '</b> sampai dengan tanggal <b>' . fdate($this->data('date_to'), 'DD1 MM3 YY2') . '</b>.');
        $this->setPoint('Jaminan ini berlaku apabila :' . PHP_EOL . '<b>PRINCIPAL</b> tidak memenuhi kewajibannya melakukan pemeliharaan sebagaimana ditentukan dalam dokumen kontrak.');
        $this->setPoint('<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> sejumlah nilai jaminan tersebut diatas dalam waktu paling lambat 14 (Empat Belas) hari kerja dengan syarat <i>(CONDITIONAL)</i> setelah menerima tuntutan pencairan secara tertulis dari <b>OBLIGEE</b> berdasar Keputusan <b>OBLIGEE</b> mengenai pengenaan sanksi akibat <b>PRINCIPAL</b> cidera janji.');
        $this->setPoint('Menunjuk pada Pasal 1831 KUH Perdata dengan ini ditegaskan kembali bahwa <b>SURETY</b> menggunakan hak-hak istimewa untuk menuntut supaya harta benda <b>PRINCIPAL</b> lebih dahulu disita dan dijual guna dapat melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');
        $this->setPoint('Tuntutan pencairan terhadap <b>SURETY</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (Tiga Puluh) hari kalender sesudah berakhirnya masa berlaku Jaminan ini.');
        $this->setContent();
        return $this;
    }
}
