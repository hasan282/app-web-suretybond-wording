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
        $this->setPoint('Dengan ini dinyatakan, bahwa kami : <bi>PT. XXX</bi>, Alamat : Jl. XXX sebagai Peserta, selanjutnya disebut PRINCIPAL, dan PT. ASURANSI UMUM BUMIPUTERA MUDA 1967 Alamat : Rukan Artha Niaga Blok G No.6, Jl. Boulevard Artha Gading - Jakarta Utara 14240 Telp. 021-4514038/24520189 Fax. 021- 4514043 sebagai Penjamin, selanjutnya disebut sebagai SURETY, bertanggung jawab dan dengan tegas terikat pada XXX, Alamat : JL. XXX sebagai Pemilik, selanjutnya disebut OBLIGEE atas uang sejumlah Rp  29,418,345.00 (DUA PULUH SEMBILAN JUTA EMPAT RATUS DELAPAN BELAS RIBU TIGA RATUS EMPAT PULUH LIMA  RUPIAH)');
        $this->setContent();
        return $this;
    }
}
