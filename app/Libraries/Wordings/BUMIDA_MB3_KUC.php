<?php

namespace App\Libraries\Wordings;

class BUMIDA_MB3_KUC extends BaseWording
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami :  PT. XXX Alamat : XXX, sebagai Kontraktor, selanjutnya disebut PRINCIPAL, dan PT. ASURANSI UMUM BUMIPUTERA MUDA 1967 Alamat : Rukan Artha Niaga Blok G No.6, Jl. Boulevard Artha Gading - Jakarta Utara 14240 Telp. 021-4514038/24520189 Fax. 021- 4514043 sebagai Penjamin, selanjutnya disebut sebagai SURETY, bertanggung jawab dan dengan tegas terikat pada XXX, Alamat : Jalan XXX ,  sebagai Pemilik, selanjutnya disebut OBLIGEE, atas uang sejumlah Rp 6,287,500.00 (ENAM JUTA DUA RATUS DELAPAN PULUH TUJUH RIBU LIMA RATUS  RUPIAH).Maka kami, PRINCIPAL dan SURETY dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut diatas dengan baik dan benar.Bilamana PRINCIPAL tidak memenuhi kewajibannya melaksanakan pekerjaan Pengecoran Lapangan dan Paving Block Lapangan yang telah dipercayakan kepadanya atas dasar Surat dari OBLIGEE No. XXX tanggal 16 Nopember 2015');
        $this->setPoint('Adapun ketentuan dari Surat Jaminan ini adalah jika PRINCIPAL telah melaksanakan kewajibannya melakukan pemeliharaan sebagaimana ditetapkan di dalam kontrak tersebut di atas, maka Jaminan ini menjadi tidak berlaku; sebaliknya jika tidak, maka Jaminan ini tetap berlaku untuk jangka waktu dari saat penyerahan pertama tanggal 15 Desember 2015 sampai dengan saat penyerahan kedua tanggal 15 Juni 2016.');
        $this->setPoint('SURETY akan membayar kepada OBLIGEE sejumlah nilai jaminan tersebut di atas dalam waktu paling lambat 14 (empat belas) hari kerja tanpa syarat setelah menerima tuntutan pencairan secara tertulis dari OBLIGEE berdasarkan keputusan OBLIGEE mengenai pengenaan sanksi akibat PRINCIPAL cidera janji.');
        $this->setPoint('Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa SURETY melepaskan hak-hak istimewanya untuk menuntut supaya harta benda PRINCIPAL lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');
        $this->setPoint('Tuntutan pencairan terhadap SURETY berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (tiga puluh) hari kalender sesudah berakhirnya masa laku Jaminan ini.
        ');
        $this->setPoint('Ditanda tangani serta dibubuhi materai di  Jakarta Pusat pada tanggal 15 Juni 2021. SURETY PT. ASURANSI UMUM BUMIPUTERA MUDA 1967 PRINCIPAL PT. XXX');
        $this->setContent();
        return $this;
    }
}
