<?php

namespace App\Libraries\PDFExport;

class wardAPB102 extends ExportWardingPDF
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
        $this->setPoint('Dengan ini menyatakan, bahwa kami __PRINCIPAL__, __ADDRPRINCIPAL__ sebagai Kontraktor, selanjutnya disebut <b>PRINCIPAL</b>, dan __ASURANSI__, alamat __ADDRASURANSI__, sebagai Penjamin, selanjutnya disebut <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada __OBLIGEE__, __ADDROBLIGEE__ sebagai Pemilik, selanjutnya disebut <b>OBLIGEE</b> atas uang sejumlah sebesar-besarnya __NILAI__ __TERBILANG__ yang harus dibayarkan kepada <b>OBLIGEE</b>.');

        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut diatas dengan baik dan benar.');

        $this->setPoint('Bahwa <b>PRINCIPAL</b> dengan suatu perjanjian tertulis __DOKUMEN__ telah mengadakan Kontrak dengan <b>OBLIGEE</b> untuk pekerjaan __PEKERJAAN__ dengan Harga Kontrak yang telah disetujui sebesar __NILAIPROYEK__ __TERBILANG__ dan Kontrak tersebut merupakan bagian yang tidak terpisahkan dari Jaminan ini.');

        $this->setPoint('Bahwa untuk Kontrak tersebut diatas, <b>OBLIGEE</b> setuju membayar kepada <b>PRINCIPAL</b> uang sebesar __NILAI__ __TERBILANG__ sebagai pembayaran uang muka sebelum pekerjaan menurut Kontrak diatas dimulai. Sebagai Jaminan terhadap pembayaran Uang Muka itu maka <b>SURETY</b> memberikan Jaminan dengan ketentuan tersebut di bawah ini.');

        $this->setPoint('Jika <b>PRINCIPAL</b> telah melakukan pembayaran kembali kepada <b>OBLIGEE</b> seluruh jumlah Uang Muka dimaksud (yang dinyatakan dalam surat tanda bukti penerimaan olehnya) atau sisa Uang Muka yang wajib dibayar menurut Kontrak tersebut, maka surat Jaminan ini menjadi batal dan tidak berlaku, sebaliknya jika tidak maka Surat Jaminan ini tetap berlaku dan efektif mulai dari tanggal __DATEFROM__ sampai dengan tanggal __DATETO__.');

        $this->setPoint('Tuntutan ganti rugi atas surat Jaminan ini dilaksanakan oleh <b>OBLIGEE</b> secara tertulis kepada <b>SURETY</b> segera setelah timbul cidera janji (Wanprestasi/default) oleh pihak <b>PRINCIPAL</b> karena tidak dapat membayar kembali Uang Muka atau sisa Uang Muka tersebut sesuai dengan syarat kontrak.');

        $this->setPoint('<b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> Uang Muka atau sisa Uang Muka yang berdasarkan kontrak belum dikembalikan oleh <b>PRINCIPAL</b> setelah menerima tuntutan penagihan (klaim) dari <b>OBLIGEE</b>.');

        $this->setPoint('Menunjuk pada 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>SURETY</b> melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');

        $this->setPoint('Setiap pengajuan ganti rugi terhadap <b>SURETY</b> berdasarkan jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 1 (satu) bulan sesudah berakhirnya masa laku jaminan ini.');

        $this->setContent();
        return $this;
    }
}
