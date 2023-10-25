<?php

namespace App\Libraries\Wordings;

class BUMIDA_PB2_NKC extends BaseWording
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami : PT XXX, Alamat : XXX sebagai Peserta, selanjutnya disebut PRINCIPAL, dan PT. ASURANSI UMUM BUMIPUTERA MUDA 1967 Alamat : Rukan Artha Niaga Blok G No.6, Jl. Boulevard Artha Gading - Jakarta Utara 14240 Telp. 021-4514038/24520189 Fax. 021- 4514043 sebagai Penjamin, selanjutnya disebut sebagai SURETY, bertanggung jawab dan dengan tegas terikat pada XXX, Alamat : JL. XXX sebagai Pemilik, selanjutnya disebut OBLIGEE atas uang sejumlah Rp  66,279,509.00 (ENAM PULUH ENAM JUTA DUA RATUS TUJUH PULUH SEMBILAN RIBU LIMA RATUS SEMBILAN RUPIAH)');
        $this->setPoint('Maka kami, PRINCIPAL dan SURETY dengan ini mengikatkan diri untuk melakukan pembayaran maksimal jumlah tersebut di atas dengan baik dan benar bilamana PRINCIPAL tidak memenuhi kewajibannya dalam melaksanakan Pekerjaan XXX yang telah dipercayakan kepadanya atas dasar Surat Pemenang Lelang dari OBLIGEE No. BLU.PL.01.01.101 tanggal 10 Februari 2015 yang selanjutnya dikukuhkan dalam  Kontrak  No.  tanggal 10 Februari 2015 antara pihak PRINCIPAL dan OBLIGEE, dan kontrak tersebut merupakan bagian yang tidak terpisahkan dari Jaminan ini.Jika PRINCIPAL menyelesaikan pekerjaan tersebut pada waktunya dengan baik dan benar sesuai dengan ketentuan dalam  kontrak; atau
        Jika PRINCIPAL membayar, memperbaiki, dan mengganti pada OBLIGEE semua kerugian dan kerusakan yang sesungguhnya diderita OBLIGEE oleh sebab kegagalan atau kelalaian dari pihak PRINCIPAL dalam melaksanakan Kontrak; a. b.');
        $this->setPoint('Adapun ketentuan dari Surat Jaminan ini adalah :
        maka Jaminan ini menjadi batal dan tidak berlaku; sebaliknya jika tidak maka Jaminan ini tetap berlaku dan efektif mulai dari tanggal 10 Februari 2015 sampai dengan tanggal 30 Juni 2015 dan dapat dimintakan perpanjangan oleh PRINCIPAL sampai 14 (empat belas) hari setelah masa Jaminan berakhir.');
        $this->setPoint('Tuntutan penagihan (klaim) atas surat jaminan ini dilaksanakan oleh OBLIGEE secara tertulis kepada SURETY segera setelah timbul cidera janji (Wanprestasi/default) oleh pihak PRINCIPAL dalam melaksanakan Kontrak, bukan karena risiko-risiko pemilik. SURETY akan membayar kepada OBLIGEE sejumlah kerugian yang sesungguhnya diderita olehnya maksimum sebesar nilai jaminan tersebut di atas selambat-lambatnnya 30 (tiga puluh) hari kalender setelah menerima tuntutan penagihan dari pihak OBLIGEE berdasar Keputusan OBLIGEE yang disetujui PRINCIPAL.');
        $this->setPoint('Menunjuk pada pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa SURETY melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam pasal 1831 KUH Perdata');
        $this->setPoint('Setiap pengajuan ganti rugi terhadap SURETY berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (tiga puluh) hari kalender sesudah berakhirnya masa laku jaminan ini. Ditandatangani serta dibubuhi materai di  Jakarta Pusat pada tanggal 15 Juni 2021 SURETY PT. ASURANSI UMUM BUMIPUTERA MUDA 1967 PRINCIPAL PT XXX');
        $this->setContent();
        return $this;
    }
}
