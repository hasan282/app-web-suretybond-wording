<?php

namespace App\Libraries\Wordings;

class BUMIDA_APB4_NKUC extends BaseWording
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami : <b>' . $this->data('principal') . '</b>, Alamat : ' . $this->data('principal_alamat') . ' sebagai Kontraktor, selanjutnya disebut <b>PRINCIPAL</b>, dan <b>' . $this->data('asuransi_print') . '</b> Alamat : ' . $this->data('cabang_alamat') . ' sebagai Penjamin, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada <b>' . $this->data('obligee') . '</b>, Alamat : ' . $this->data('obligee_alamat') . ' sebagai Pemilik Pekerjaan, selanjutnya disebut <b>OBLIGEE</b> atas uang sejumlah <bi>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . ' </bi> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ').</bi>');
        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran maksimal jumlah tersebut di atas dengan baik dan benar.');
        $this->setPoint('Bahwa <b>PRINCIPAL</b> dengan suatu perjanjian tertulis <b>' . $this->data('dokumen') . '</b> telah mengadakan kontrak dengan <b>OBLIGEE</b> untuk pekerjaan <b>' . $this->data('proyek_nama') . '</b> dengan Harga Kontrak yang telah disetujui sebesar <bi>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . ' </bi> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ').</bi> dan kontrak tersebut merupakan bagian yang tidak terpisahkan dari jaminan ini.');
        $this->setPoint('Bahwa untuk Kontrak tersebut diatas, <b>OBLIGEE</b> setuju membayar kepada <b>PRINCIPAL</b> uang sebesar <bi>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . ' </bi> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ').</bi> sebagai pembayaran uang muka sebelum Pekerjaan menurut Kontrak diatas dimulai. Sebagai jaminan terhadap pembayaran Uang Muka itu <b>SURETY</b> memberikan jaminan dengan ketentuan tersebut dibawah ini.Jika <b>PRINCIPAL</b> telah melakukan pembayaran kembali kepada <b>OBLIGEE</b> seluruh jumlah Uang Muka dimaksud (yang dinyatakan dalam surat tanda bukti penerimaan olehnya) atau sisa Uang Muka yang wajib dibayar menurut Kontrak tersebut maka surat Jaminan ini menjadi batal dan tidak berlaku; sebaliknya jika tidak maka Surat Jaminan ini tetap berlaku dan efektif mulai dari <b>' . $this->data('date_from') . '</b> sampai dengan <b>' . $this->data('date_to') . '</b> (selama berlakunya Kontrak atau sampai pada tanggal Uang Muka telah dibayar kembali seluruhnya)');
        $this->setPoint('Tuntutan ganti rugi surat Jaminan ini dilaksanakan oleh <b>OBLIGEE</b> secara tertulis kepada <b>SURETY</b> segera setelah timbul cidera janji (wanprestasi/default) oleh pihak <b>PRINCIPAL</b> karena tidak dapat membayar kembali Uang Muka atau sisa Uang Muka tersebut sesuai dengan syarat kontrak.');
        $this->setPoint('<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> Uang Muka atau sisa Uang Muka yang berdasarkan kontrak belum dikembalikan oleh <b>PRINCIPAL</b> setelah menerima tuntutan penagihan (Klaim) dari <b>OBLIGEE</b> Menunjuk pada pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>SURETY</b> melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam pasal 1831 KUH Perdata.');
        $this->setPoint('Setiap pengajuan ganti rugi terhadap <b>SURETY</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu <bi>30 (tiga puluh) hari</bi> kalender sesudah berakhirnya masa laku jaminan ini.');
        $this->setContent();
        return $this;
    }
}
