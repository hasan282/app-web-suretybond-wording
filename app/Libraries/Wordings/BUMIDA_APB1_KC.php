<?php

namespace App\Libraries\Wordings;

class BUMIDA_APB1_KC extends BaseWording
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami <b>' . $this->data('principal') . '</b>, ' . $this->data('principal_alamat') . ' sebagai Kontraktor, selanjutnya disebut <b>PRINCIPAL</b>, dan <b>' . $this->data('asuransi_print') . $this->data('cabang_print', ' $1') . '</b> ' . $this->data('cabang_alamat') . ' sebagai Penjamin, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada <b>' . $this->data('obligee') . '</b>, ' . $this->data('obligee_alamat') . ' sebagai Pemilik Pekerjaan, selanjutnya disebut <b>OBLIGEE</b> atas uang sejumlah <b>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . '</b> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi>.');
        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran maksimal jumlah tersebut di atas dengan baik dan benar.');
        $this->setPoint('Bahwa <b>PRINCIPAL</b> dengan suatu perjanjian tertulis <b>' . $this->data('dokumen') . '</b>' . $this->data('dokumen_date', ' tanggal <b>$1</b>', function ($date) {
            return fdate($date, 'DD1 MM3 YY2');
        }) . ' telah mengadakan kontrak dengan <b>OBLIGEE</b> untuk pekerjaan <b>' . $this->data('proyek_nama') . '</b> dengan Harga Kontrak yang telah disetujui sebesar <b>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . '</b> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi> dan kontrak tersebut merupakan bagian yang tidak terpisahkan dari jaminan ini.');
        $this->setPoint('Bahwa untuk Kontrak tersebut diatas, <b>OBLIGEE</b> setuju membayar kepada <b>PRINCIPAL</b> uang sebesar <b>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . '</b> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi> sebagai pembayaran uang muka sebelum Pekerjaan menurut Kontrak diatas dimulai. Sebagai jaminan terhadap pembayaran Uang Muka itu <b>SURETY</b> memberikan jaminan dengan ketentuan tersebut dibawah ini.');
        $this->setPoint('Jika <b>PRINCIPAL</b> telah melakukan pembayaran kembali kepada <b>OBLIGEE</b> seluruh jumlah Uang Muka dimaksud (yang dinyatakan dalam surat tanda bukti penerimaan olehnya) atau sisa Uang Muka yang wajib dibayar menurut Kontrak tersebut maka surat Jaminan ini menjadi batal dan tidak berlaku; sebaliknya jika tidak maka Surat Jaminan ini tetap berlaku dan efektif mulai dari tanggal <b>' . fdate($this->data('date_from'), 'DD1 MM3 YY2') . '</b> sampai dengan <b>' . fdate($this->data('date_to'), 'DD1 MM3 YY2') . '</b> <i>(selama berlakunya Kontrak atau sampai pada tanggal Uang Muka telah dibayar kembali seluruhnya)</i>.');
        $this->setPoint('Tuntutan ganti rugi surat Jaminan ini dilaksanakan oleh <b>OBLIGEE</b> secara tertulis kepada <b>SURETY</b> segera setelah timbul cidera janji (wanprestasi/default) oleh pihak <b>PRINCIPAL</b> karena tidak dapat membayar kembali Uang Muka atau sisa Uang Muka tersebut sesuai dengan syarat kontrak.');
        $this->setPoint('<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> Uang Muka atau sisa Uang Muka yang berdasarkan kontrak belum dikembalikan oleh <b>PRINCIPAL</b> setelah menerima tuntutan penagihan (Klaim) dari <b>OBLIGEE.</b>');
        $this->setPoint('Menunjuk pada pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>SURETY</b> melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam pasal 1831 KUH Perdata.');
        $this->setPoint('Setiap pengajuan ganti rugi terhadap <b>SURETY</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (Tiga Puluh) hari kalender sesudah berakhirnya masa laku jaminan ini.');
        $this->setContent();
        return $this;
    }
}
