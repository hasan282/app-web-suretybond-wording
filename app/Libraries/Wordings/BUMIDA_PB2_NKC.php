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
        $this->footTipe = 2;
    }

    public function content()
    {
        $this->setPoint('Dengan ini dinyatakan, bahwa kami : <b>' . $this->data('principal') . '</b>, Alamat : ' . $this->data('principal_alamat') . ' sebagai Peserta, selanjutnya disebut <b>PRINCIPAL</b>, dan <b>' . $this->data('asuransi_print') . '</b> Alamat : ' . $this->data('cabang_alamat') . ' sebagai Penjamin, selanjutnya disebut sebagai <b>SURETY</b>, bertanggung jawab dan dengan tegas terikat pada <b>' . $this->data('obligee') . '</b> , Alamat : ' . $this->data('obligee_alamat') . ' sebagai Pemilik, selanjutnya disebut <b>OBLIGEE</b> atas uang sejumlah<bi>' . $this->data('symbol') . ' ' . nformat($this->data('nilai')) . ' </bi> <bi>(' . $this->terbilang('nilai') . ' ' . $this->data('currency') . ')</bi>.');
        $this->setPoint('Maka kami, <b>PRINCIPAL</b> dan <b>SURETY</b> dengan ini mengikatkan diri untuk melakukan pembayaran maksimal jumlah tersebut di atas dengan baik dan benar bilamana <b>PRINCIPAL</b> tidak memenuhi kewajibannya dalam melaksanakan Pekerjaan <b>' . $this->data('proyek_nama') . '</b> yang telah dipercayakan kepadanya atas dasar Surat Pemenang Lelang dari <b>OBLIGEE</b> No. BLU.PL.01.01.101 tanggal 10 Februari 2015 yang selanjutnya dikukuhkan dalam  Kontrak  No.  tanggal 10 Februari 2015 antara pihak <b>PRINCIPAL</b> dan <b>OBLIGEE</b>, dan kontrak tersebut merupakan bagian yang tidak terpisahkan dari Jaminan ini.Jika <b>PRINCIPAL</b> menyelesaikan pekerjaan tersebut pada waktunya dengan baik dan benar sesuai dengan ketentuan dalam  kontrak; atau
        Jika <b>PRINCIPAL</b> membayar, memperbaiki, dan mengganti pada <b>OBLIGEE</b> semua kerugian dan kerusakan yang sesungguhnya diderita <b>OBLIGEE</b> oleh sebab kegagalan atau kelalaian dari pihak <b>PRINCIPAL</b> dalam melaksanakan Kontrak; a. b.');
        $this->setPoint('Adapun ketentuan dari Surat Jaminan ini adalah :
        maka Jaminan ini menjadi batal dan tidak berlaku; sebaliknya jika tidak maka Jaminan ini tetap berlaku dan efektif mulai dari tanggal <b>' . $this->data('date_from') . '</b> sampai dengan tanggal <b>' . $this->data('date_to') . '</b> dan dapat dimintakan perpanjangan oleh <b>PRINCIPAL</b> sampai <b>14 (empat belas) hari</b> setelah masa Jaminan berakhir.');
        $this->setPoint('Tuntutan penagihan (klaim) atas surat jaminan ini dilaksanakan oleh <b>OBLIGEE</b> secara tertulis kepada <b>SURETY</b> segera setelah timbul cidera janji (Wanprestasi/default) oleh pihak <b>PRINCIPAL</b> dalam melaksanakan Kontrak, bukan karena risiko-risiko pemilik. <b>SURETY</b> akan membayar kepada <b>OBLIGEE</b> sejumlah kerugian yang sesungguhnya diderita olehnya maksimum sebesar nilai jaminan tersebut di atas selambat-lambatnnya <b>30 (tiga puluh) hari</b> kalender setelah menerima tuntutan penagihan dari pihak <b>OBLIGEE</b> berdasar Keputusan <b>OBLIGEE</b> yang disetujui <b>PRINCIPAL</b>.');
        $this->setPoint('Menunjuk pada pasal 1832 KUH Perdata dengan ini ditegaskan kembali bahwa <b>SURETY</b> melepaskan hak-hak istimewanya untuk menuntut supaya harta benda pihak yang dijamin lebih dahulu disita dan dijual guna melunasi hutangnya sebagaimana dimaksud dalam pasal 1831 KUH Perdata');
        $this->setPoint('Setiap pengajuan ganti rugi terhadap <b>SURETY</b> berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu <b>30 (tiga puluh) hari</b> kalender sesudah berakhirnya masa laku jaminan ini.');
        $this->setContent();
        return $this;
    }
}
