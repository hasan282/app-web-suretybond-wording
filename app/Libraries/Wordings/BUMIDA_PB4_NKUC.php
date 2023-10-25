<?php

namespace App\Libraries\Wordings;

class BUMIDA_PB4_NKUC extends BaseWording
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami : PT. ' . $this->data('obligee') . ', Alamat : ' . $this->data('obligee_alamat') . ' sebagai Peserta, selanjutnya disebut PRINCIPAL, dan PT. ASURANSI UMUM BUMIPUTERA MUDA 1967 Alamat : ' . $this->data('principal_alamat') . 'Telp. 021-4514038/24520189 Fax. 021- 4514043 sebagai Penjamin, selanjutnya disebut sebagai SURETY, bertanggung jawab dan dengan tegas terikat pada ' . $this->data('principal') . ', Alamat : ' . $this->data('obligee_alamat') . 'sebagai Pemilik, selanjutnya disebut OBLIGEE atas uang sejumlah Rp  29,418,345.00 (DUA PULUH SEMBILAN JUTA EMPAT RATUS DELAPAN BELAS RIBU TIGA RATUS EMPAT PULUH LIMA  RUPIAH)');
        $this->setPoint('Maka kami, PRINCIPAL dan SURETY dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut di atas dengan baik dan benar bilamana PRINCIPAL tidak memenuhi kewajibannya dalam melaksanakan Pekerjaan yang telah dipercayakan kepadanya atas dasar Surat Penunjukan Pemenang Barang/Jasa (SPPBJ) dari OBLIGEE No. No : B/09/024/63/01/2014 tanggal 28 Januari 2014  untuk  Pelaksanaan PEKERJAAN : XXXXX sesuai Surat Penunjukan Penyedia Barang / Jasa No : B/09/024/63/01/2014 tanggal 28 Januari 2014');
        $this->setPoint('Surat Jaminan ini berlaku selama 353 (TIGA RATUS LIMA PULUH TIGA ) hari kalender dan efektif mulai dari tanggal 3 Februari 2014 sampai dengan tanggal 21 Januari 2015');
        $this->setPoint('Jaminan ini berlaku apabila : a. PRINCIPAL tidak menyelesaikan pekerjaan tersebut pada waktunya dengan baik dan benar sesuai dengan ketentuan kontrak ; b. Pemutusan kontrak akibat kesalahan PRINCIPAL.');
        $this->setPoint('SURETY akan membayar kepada OBLIGEE sejumlah nilai jaminan tersebut di atas dalam waktu paling lambat 14 (empat belas) hari kerja tanpa syarat setelah menerima tuntutan pencairan secara tertulis dari OBLIGEE berdasar keputusan OBLIGEE mengenai pengenaan sanksi akibat PRINCIPAL cidera janji.');
        $this->setPoint('Menunjuk pada pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa SURETY melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam pasal 1831 KUH Perdata.Tuntutan pencairan terhadap SURETY berdasarkan jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (tiga puluh) hari kalender sesudah berakhirnya masa berlaku Jaminan ini.');
        $this->setPoint('Ditandatangani serta dibubuhi materai di  Jakarta Pusat pada tanggal 15 Juni 2021 SURETY PT. ASURANSI UMUM BUMIPUTERA MUDA 1967 PRINCIPAL PT. XXX');
        $this->setContent();
        return $this;
    }
}
