<?php

namespace App\Libraries\Wordings;

class BUMIDA_MB2_NKC extends BaseWording
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami : PT XXX, JL. XXX , sebagai Peserta, selanjutnya disebut PRINCIPAL, dan PT. ASURANSI UMUM BUMIPUTERA MUDA 1967 Alamat : Rukan Artha Niaga Blok G No.6, Jl. Boulevard Artha Gading - Jakarta Utara 14240 Telp. 021-4514038/24520189 Fax. 021- 4514043 sebagai Penjamin, selanjutnya disebut sebagai SURETY, bertanggung jawab dan dengan tegas terikat pada PT XXX, Alamat : XXX, sebagai Pemilik, selanjutnya disebut OBLIGEE atas uang sejumlah Rp 979,000.00 SEMBILAN RATUS TUJUH PULUH SEMBILAN RIBU RUPIAH');
        $this->setPoint('Maka kami, PRINCIPAL dan SURETY dengan ini mengikatkan diri untuk melakukan pembayaran maksimal jumlah tersebut diatas bilamana pihak PRINCIPAL tidak memenuhi kewajibannya melaksanakan pekerjaan pemeliharaan sebagaimana telah ditetapkan dalam Kontrak No. PFA/3.3/138/R dalam hal pekerjaan XXX antara pihak PRINCIPAL dan OBLIGEE, dan kontrak tersebut merupakan bagian yang tidak terpisahkan dari Jaminan ini. Tuntutan penagihan (klaim) atas Surat Jaminan ini dilaksanakan oleh OBLIGEE secara tertulis kepada SURETY segera setelah timbul cidera janji (wanprestasi/default) oleh pihak PRINCIPAL dalam melaksanakan pemeliharaan sesuai dengan ketentuan-ketentuan dalam kontrak tersebut di atas dan bukan karena force majeure serta dinyatakan secara tertulis oleh OBLIGEE. a. SURETY akan membayar kepada OBLIGEE sesuai kerugian yang diderita Obligee maksimum sejumlah nilai jaminan tersebut di atas selambat-lambatnya 30 (tiga puluh) hari kalender setelah menerima surat tuntutan penagihan (klaim). Besarnya klaim yang akan dibayar oleh SURETY adalah sesuai dengan jumlah biaya yang diperlukan untuk memperbaiki kerusakan yang terjadi selama masa pemeliharaan dengan maksimum pembayaran sebesar nilai jaminan. b.');
        $this->setPoint('Surat Jaminan ini berlaku selama 93 (SEMBILAN PULUH TIGA ) hari kalender dan efektif mulai dari tanggal 11 Juni 2015 sampai dengan tanggal 11 September 2015.');
        $this->setPoint('Menunjuk pada Pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa SURETY melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata ');
        $this->setPoint('Setiap pengajuan ganti rugi terhadap SURETY berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (tiga puluh) hari kalender sesudah berakhirnya masa laku Jaminan ini. Ditanda tangani serta dibubuhi materai di  Jakarta Pusat pada tanggal 15 Juni 2021. SURETY PT. ASURANSI UMUM BUMIPUTERA MUDA 1967 PRINCIPAL PT XXX');
        $this->setContent();
        return $this;
    }
}
