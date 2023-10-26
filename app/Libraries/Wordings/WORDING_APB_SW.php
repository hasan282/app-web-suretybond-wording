<?php

namespace App\Libraries\Wordings;

class WORDING_APB_SW extends BaseWording
// Advance Payment Bond - Swasta
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
        $this->setPoint('Dengan ini menyatakan, bahwa kami <b>' . $this->data('principal') . '</b>, ' . $this->data('principal_alamat') . ' sebagai kontraktor, selanjutnya disebut <b>PRINCIPAL</b>, dan <b>' . $this->data('asuransi_print') . $this->data('cabang_print', ' $1') . '</b>, alamat ' . $this->data('cabang_alamat') . ' sebagai penjamin, selanjutnya disebut <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada <b>' . $this->data('obligee') . '</b>, ' . $this->data('obligee_alamat') . ' sebagai pemilik, selanjutnya disebut <b>OBLIGEE</b> atas uang sejumlah sebesar-besarnya <b>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . '</b> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi> yang harus dibayarkan kepada <b>OBLIGEE</b>.');
        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut diatas dengan baik dan benar.');
        $this->setPoint('Bahwa <b>PRINCIPAL</b> dengan suatu perjanjian tertulis <b>' . $this->data('dokumen') . '</b>' . $this->data('dokumen_date', ' tanggal <b>$1</b>', function ($date) {
            return fdate($date, 'DD1 MM3 YY2');
        }) . ' telah mengadakan kontrak dengan <b>OBLIGEE</b> untuk pekerjaan <b>' . $this->data('proyek_nama') . '</b> dengan harga kontrak yang telah disetujui sebesar <b>' . $this->data('proyek_currency_2') . ' ' . nformat($this->data('proyek_nilai')) . '</b> <bi>(' . $this->terbilang('proyek_nilai') . ' ' . $this->data('proyek_currency') . ')</bi> dan kontrak tersebut merupakan bagian yang tidak terpisahkan dari Jaminan ini.');
        $this->setPoint('Bahwa untuk kontrak tersebut diatas, <b>OBLIGEE</b> setuju membayar kepada <b>PRINCIPAL</b> uang sebesar <b>' . $this->data('currency_2') . ' ' . nformat($this->data('nilai')) . '</b> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi> sebagai pembayaran uang muka sebelum pekerjaan menurut kontrak diatas dimulai. Sebagai Jaminan terhadap pembayaran Uang Muka itu maka <b>SURETY</b> memberikan Jaminan dengan ketentuan tersebut di bawah ini.');
        $this->setPoint('Jika <b>PRINCIPAL</b> telah melakukan pembayaran kembali kepada <b>OBLIGEE</b> seluruh jumlah Uang Muka dimaksud (yang dinyatakan dalam surat tanda bukti penerimaan olehnya) atau sisa Uang Muka yang wajib dibayar menurut Kontrak tersebut, maka surat Jaminan ini menjadi batal dan tidak berlaku, sebaliknya jika tidak maka Surat Jaminan ini tetap berlaku dan efektif mulai dari tanggal <b>' . fdate($this->data('date_from'), 'DD1 MM3 YY2') . '</b> sampai dengan tanggal <b>' . fdate($this->data('date_to'), 'DD1 MM3 YY2') . '</b>.');
        $this->setPoint('Tuntutan ganti rugi atas surat Jaminan ini dilaksanakan oleh <b>OBLIGEE</b> secara tertulis kepada <b>SURETY</b> segera setelah timbul cidera janji (wanprestasi/default) oleh pihak <b>PRINCIPAL</b> karena tidak dapat membayar kembali Uang Muka atau sisa Uang Muka tersebut sesuai dengan syarat kontrak.');
        $this->setPoint('<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> Uang Muka atau sisa Uang Muka yang berdasarkan kontrak belum dikembalikan oleh <b>PRINCIPAL</b> setelah menerima tuntutan penagihan (klaim) dari <b>OBLIGEE</b>.');
        $this->setPoint('Menunjuk pada 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>SURETY</b> melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');
        $this->setPoint('Setiap pengajuan ganti rugi terhadap <b>SURETY</b> berdasarkan jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 1 (Satu) bulan sesudah berakhirnya masa laku jaminan ini.');
        $this->setContent();
        return $this;
    }
}
