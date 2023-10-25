<?php

namespace App\Libraries\Wordings;

class BUMIDA_BB2_NKC extends BaseWording
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami : <b> PT. ' . $this->data('principal') . ', Alamat : JL. XXX sebagai PESERTA, selanjutnya disebut PRINCIPAL, dan PT. ASURANSI UMUM BUMIPUTERA MUDA 1967 Alamat : Rukan Artha Niaga Blok G No.6, Jl. Boulevard Artha Gading - Jakarta Utara 14240 Telp. 021-4514038/24520189 Fax. 021- 4514043 sebagai  Penjamin, selanjutnya disebut sebagai SURETY, bertanggung jawab dan dengan tegas terikat pada PT XXX, alamat XXX sebagai Pemilik, selanjutnya disebut OBLIGEE atas uang sejumlah Rp 32,200,000.00 (Tiga Puluh Dua Juta Dua Ratus Ribu Rupiah)');
        $this->setPoint('Maka kami, PRINCIPAL dan SURETY dengan ini mengikatkan diri untuk melakukan pembayaran maksimal jumlah tersebut di atas dengan baik dan benar bilamana PRINCIPAL tidak memenuhi kewajiban sebagaimana ditetapkan dalam instruksi kepada Peserta Lelang untuk pekerjaan XXXXX yang diselenggarakan oleh OBLIGEE pada tanggal 18 Nopember 2014 di JAKARTA');
        $this->setPoint('Adapun ketentuan dari Surat Jaminan ini adalah jika : PRINCIPAL menarik kembali Penawarannya sebelum berakhirnya masa laku Penawaran yang dinyatakan dalam Formulir Penawaran, Penawaran PRINCIPAL disetujui oleh OBLIGEE dalam masa laku Penawaran, dan PRINCIPAL telah : (i) menyerahkan Jaminan Pelaksanaan yang diperlukan, (ii) menandatangani Kontrak, (iii) menandatangi dokumen perikatan lainnya sebagaimana yang diharuskan dalam Dokumen Lelang, atau c. PRINCIPAL gagal melaksanakan ketentuan seperti tersebut pada butir b diatas, dan telah membayar kepada OBLIGEE selisih (tidak melebihi nilai jaminan) antara perbedaan penawarannya dari penawaran yang lebih besar berikutnya, dimana OBLIGEE menunjuk kontraktor yang berikut itu untuk melaksanakan pekerjaan yang ditawarkannya,maka Jaminan ini menjadi batal dan tidak berlaku; sebaliknya jika tidak terjadi hal-hal seperti tersebut pada butir a, b dan c di atas maka Jaminan ini tetap berlaku dan efektif mulai dari tanggal 18 Nopember 2014 sampai dengan tanggal 16 Februari 2015');
        $this->setPoint('Tuntunan penagihan (klaim) atas surat jaminan ini dilaksanakan oleh OBLIGEE secara tertulis kepada SURETY segera setelah timbul cidera janji (Wanprestasi/default) oleh pihak PRINCIPAL sesuai dengan ketentuan-ketentuan dalam Dokumen Lelang. SURETY akan membayar kepada OBLIGEE jumlah yang sesungguhnya diderita olehnya maksimum sebesar nilai jaminan tersebut di atas, selambat-lambatnnya 30 (tiga puluh) hari kalender setelah menerima tuntutan penagihan dari pihak OBLIGEE berdasar Keputusan OBLIGEE mengenai pengenaan sanksi akibat tindakan cidera janji oleh PRINCIPAL.');
        $this->setPoint('Menunjuk pada pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa SURETY melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam pasal 1831 KUH Perdata.');
        $this->setPoint('Setiap pengajuan ganti rugi terhadap SURETY berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (tiga puluh) hari kalender sesudah berakhirnya masa laku jaminan ini.');
        $this->setPoint('Ditandatangani serta dibubuhi materai di  Jakarta Pusat pada tanggal 15 Juni 2021 PRINCIPAL PT. XXX SURETY PT. ASURANSI UMUM BUMIPUTERA MUDA 1967');
        $this->setContent();
        return $this;
    }
}
