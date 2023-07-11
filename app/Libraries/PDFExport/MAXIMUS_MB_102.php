<?php

namespace App\Libraries\PDFExport;

class MAXIMUS_MB_102 extends ExportWardingPDF
// Maintenance Bond - Swasta
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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami : PT. FIBERHOME TECHNOLOGIES INDONESIA, APL Tower Lantai 30, Jl. Jend. S. Parman Kav. 28, Jakarta Barat 11470 sebagai Penyedia, selanjutnya disebut PRINCIPAL, dan PT. ASURANSI MAXIMUS GRAHA PERSADA Tbk, KANTOR CABANG BOGOR, Ruko VIP No. 88 B Jl. Raya Pajajaran, Bogor 16128. sebagai PENJAMIN, selanjutnya disebut sebagai SURETY, bertanggung jawab dan dengan tegas terikat pada PT. TELKOM AKSES, Gedung Telkom Jakarta Barat, Jl. Letjen S. Parman Kav. 8 Tomang Grogol Petamburan Jakarta Barat DKI Jakarta 11440 sebagai pemilik pekerjaan, selanjutnya disebut OBLIGEE atas uang sejumlah Rp. 24,538,727.00 (Terbilang: Dua Puluh Empat Juta Lima Ratus Tiga Puluh Delapan Ribu Tujuh Ratus Dua Puluh Tujuh Rupiah).');

        $this->setPoint('Maka kami, PRINCIPAL dan SURETY dengan ini mengikatkan diri untuk melakukan pembayaran jumlah tersebut di atas dengan baik dan benar bilamana PRINCIPAL tidak memenuhi kewajiban dalam melaksanakan PEKERJAAN 5SDA PWS T-CLOUD 4 LOKASI DISTRIBUSI ODC-PWS-FV dipercayakan kepadanya atas dasar Kontrak No: 00637/HK.810/TA-370000/11-2021 tanggal 1 November 2021 dan Berita Acara Serah Terima Pertama (BAST-I) No.: BAST/4400008287/LG.320/JTAK-605B-000/2023 tanggal 31 Januari 2023');

        $this->setPoint('Surat Jaminan ini berlaku selama 365 (Tiga Ratus Enam Puluh Lima) hari kalender dan efektif mulai tanggal 31 Januari 2023 sampai dengan tanggal 31 Januari 2024');

        $this->setPoint('Jaminan ini berlaku apabila : PHP_EOL PRINCIPAL tidak memenuhi kewajibannya melakukan pemeliharaan sebagaimana ditentukan dalam Dokumen Kontrak.');

        $this->setPoint('SURETY akan membayar kepada OBLIGEE sejumlah nilai jaminan tersebut diatas dalam waktu paling lambat 14 (empat belas) hari kerja dengan syarat ( Conditional ) setelah menerima tuntutan pencairan secara tertulis dari OBLIGEE berdasar Keputusan OBLIGEE mengenai pengenaan sanksi akibat PRINCIPAL cidera janji.');

        $this->setPoint('Menunjuk pada Pasal 1831 KUH Perdata dengan ini ditegaskan kembali bahwa SURETY menggunakan hak-hak istimewa untuk menuntut supaya harta benda PRINCIPAL lebih dahulu disita dan dijual guna dapat melunasi hutangnya sebagaimana dimaksud dalam Pasal 1831 KUH Perdata.');

        $this->setPoint('Tuntutan pencairan terhadap SURETY berdasarkan Jaminan ini harus sudah diajukan selambat-lambatnya dalam waktu 30 (tiga puluh) hari kalender sesudah berakhirnya masa berlaku Jaminan ini.');

        $this->setContent();
        return $this;
    }
}
