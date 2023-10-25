<?php

namespace App\Libraries\Wordings;

class BUMIDA_BB3_KUC extends BaseWording
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami : PT XXX, Alamat : JL. XXX sebagai Kontraktor, selanjutnya disebut PRINCIPAL, dan PT. ASURANSI UMUM BUMIPUTERA MUDA 1967 Alamat : Rukan Artha Niaga Blok G No.6, Jl. Boulevard Artha Gading - Jakarta Utara 14240 Telp. 021-4514038/24520189 Fax. 021- 4514043 sebagai  Penjamin, selanjutnya disebut sebagai SURETY, bertanggung jawab dan dengan tegas terikat pada XXX, alamat JL. XXX sebagai Pemilik, selanjutnya disebut OBLIGEE atas uang sejumlah Rp  5,285,960.00 (Lima Juta Dua Ratus Delapan Puluh Lima Ribu Sembilan Ratus Enam Puluh  Rupiah)');
        $this->setPoint('Surat Jaminan ini berlaku apabila PRINCIPAL :');
        $this->setPoint('menarik kembali Penawarannya selama dilaksanakannya pelelangan atau sesudah di nyatakan sebagai pemenang; a.Tidak  : b. (i) hadir dalam klarifikasi dan / atau verifikasi kualifikasi dalam hal pelelangan dilakukan dengan Pascakualifikasi ; atau (ii)   menyerahkan Jaminan Pelaksanaan setelah ditunjuk sebagai pemenang. c. Terlibat Korupsi, Kolusi dan Nepotisme (KKN) ; atau Melakukan penipuan / pemalsuan atas informasi yang disampaikan dalam Dokumen Penawaran. d.');
        $this->setPoint('Surat Jaminan ini berlaku selama 30 (TIGA PULUH ) hari kalender dan efektif mulai dari tanggal 29 April 2015 sampai dengan tanggal 29 Mei 2015.        SURETY akan membayar kepada OBLIGEE sejumlah nilai jaminan tersebut di atas dalam waktu paling lambat 14 (empat belas) hari kerja tanpa syarat (Unconditional) setelah menerima tuntutan penagihan secara tertulis dari OBLIGEE berdasar Keputusan OBLIGEE mengenai pengenaan sanksi akibat PRINCIPAL cidera janji/wanprestasi.');
        $this->setPoint('Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa SURETY melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');
        $this->setPoint('Setiap pengajuan ganti rugi terhadap SURETY berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (tiga puluh) hari kalender sesudah berakhirnya masa laku Jaminan ini.');
        $this->setPoint('Ditandatangani serta dibubuhi materai di  Jakarta Pusat pada tanggal 15 Juni 2021 PRINCIPAL PT XXX SURETY PT. ASURANSI UMUM BUMIPUTERA MUDA 1967');
        $this->setContent();
        return $this;
    }
}
