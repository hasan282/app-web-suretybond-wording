<?php

namespace App\Libraries\Wordings;

class BUMIDA_PB3_KUC extends BaseWording
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami : PT. XXX, Alamat : XXX sebagai Kontraktor, selanjutnya disebut PRINCIPAL, dan PT. ASURANSI UMUM BUMIPUTERA MUDA 1967 Alamat : Rukan Artha Niaga Blok G No.6, Jl. Boulevard Artha Gading - Jakarta Utara 14240 Telp. 021-4514038/24520189 Fax. 021- 4514043 sebagai  Penjamin, selanjutnya disebut sebagai SURETY, bertanggung jawab dan dengan tegas terikat pada XXX, Alamat : JL. XXX sebagai Pemilik, selanjutnya disebut OBLIGEE atas uang sejumlah Rp  2,303,863,039.00 (DUA MILIAR TIGA RATUS TIGA JUTA DELAPAN RATUS ENAM PULUH TIGA RIBU TIGA PULUH SEMBILAN  RUPIAH)');
        $this->setPoint('Maka kami, PRINCIPAL dan SURETY dengan ini mengikatkan diri untuk melakukan pembayaran maksimal jumlah tersebut di atas dengan baik dan benar bilamana PRINCIPAL tidak memenuhi kewajibannya dalam melaksanakan Pekerjaan XXX yang telah dipercayakan kepadanya atas dasar Surat Pemenang Lelang dari OBLIGEE No. 21/-1.826.1 tanggal 4 Februari 2014 yang selanjutnya dikukuhkan dalam  Kontrak  No.25/-1.826.1   tanggal 14 Februari 2014 antara pihak PRINCIPAL dan OBLIGEE, dan kontrak tersebut merupakan bagian yang tidak terpisahkan dari Jaminan ini.
        Surat Jaminan ini berlaku selama 106 (SERATUS ENAM ) hari kalender dan efektif mulai dari tanggal 8 Oktober 2015 sampai dengan tanggal 22 Januari 2016.');
        $this->setPoint('Jaminan ini berlaku apabila : a. PRINCIPAL tidak menyelesaikan pekerjaan tersebut pada waktunya dengan baik dan benar sesuai dengan ketentuan kontrak ; b. Pemutusan kontrak akibat kesalahan PRINCIPAL.');
        $this->setPoint('SURETY akan membayar kepada OBLIGEE sejumlah nilai jaminan tersebut di atas dalam waktu paling lambat 14 (empat belas) hari kerja tanpa syarat setelah menerima tuntutan pencairan secara tertulis dari OBLIGEE berdasar keputusan OBLIGEE mengenai pengenaan sanksi akibat PRINCIPAL cidera janji.');
        $this->setPoint('Menunjuk pada pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa SURETY melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam pasal 1831 KUH Perdata Tuntutan pencairan terhadap SURETY berdasarkan jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (tiga puluh) hari kalender sesudah berakhirnya masa berlaku Jaminan ini.');
        $this->setPoint('Ditandatangani serta dibubuhi materai di  Jakarta Pusat pada tanggal 15 Juni 2021 SURETY PT. ASURANSI UMUM BUMIPUTERA MUDA 1967 PRINCIPAL PT. XXX XXX Direktur');
        $this->setContent();
        return $this;
    }
}
