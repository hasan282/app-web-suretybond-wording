<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Principal extends Seeder
{
    public function run()
    {
        helper(['format', 'enkripsi']);
        $principal = array(
            array(
                'nama' => 'PT FIBERHOME TECHNOLOGIES INDONESIA',
                'alamat' => 'APL Tower Lantai 30, Jl. Letjend. S. Parman Kav. 28, Kel. Tanjung Duren Selatan, Kec. Grogol Pertamburan',
                'pejabat' => 'Huang Liang',
                'jabatan' => 'Direktur Utama',
                'marketing' => '230201125148'
            ),
            array(
                'nama' => 'CV GARDENIA BAYANGKARA',
                'alamat' => 'Jl. Sonokembang Raya No. 15 A RT.07 RW.011 Kel. Bakti Jaya Kec. Sukmajaya Depok, Jawa Barat',
                'pejabat' => 'Wiwin Wijayanti',
                'jabatan' => 'Direktur',
                'marketing' => '230201125148'
            )
        );
        // $this->_running($principal);
        $this->_dummyrun();
    }

    private function _running(array $data)
    {
        $office = '221002065931';
        $principal = array();
        $people = array();
        foreach ($data as $pr) {
            $base = create_id(0, true);
            $idpr = $base . mt_rand(1000, 9990);
            $idpp = $base . mt_rand(1000, 9990);
            $principal[] = array(
                'id' => $idpr,
                'enkripsi' => sha3hash($idpr, 50),
                'nama' => $pr['nama'],
                'alamat' => $pr['alamat'],
                'id_office' => $office,
                'id_marketing' => $pr['marketing'],
                'actives' => 1
            );
            $people[] = array(
                'id' => $idpp,
                'enkripsi' => sha3hash($idpp, 50),
                'id_principal' => $idpr,
                'nama' => $pr['pejabat'],
                'jabatan' => $pr['jabatan'],
                'actives' => 1
            );
        }
        $this->db->table('principal')->insertBatch($principal);
        $this->db->table('principal_people')->insertBatch($people);
    }

    private function _dummyrun()
    {
        $office = '221002065931';
        $principal = array();
        $people = array();
        foreach ($this->_data() as $pr) {
            $base = create_id(0, true);
            $idpr = $base . mt_rand(1000, 9990);
            $idpp = $base . mt_rand(1000, 9990);
            $principal[] = array(
                'id' => $idpr,
                'enkripsi' => sha3hash($idpr, 50),
                'nama' => $pr,
                'alamat' => 'Jl. Raya No.' . mt_rand(10, 290),
                'id_office' => $office,
                'id_marketing' => $this->_marketing(),
                'actives' => 1
            );
            $people[] = array(
                'id' => $idpp,
                'enkripsi' => sha3hash($idpp, 50),
                'id_principal' => $idpr,
                'nama' => 'Sambo',
                'jabatan' => 'CEO',
                'actives' => 1
            );
        }
        $this->db->table('principal')->insertBatch($principal);
        $this->db->table('principal_people')->insertBatch($people);
    }

    private function _marketing(?string $key = null)
    {
        $list = array(
            'ROCHMAN' => '230201125148',
            'ANAS' => '230505133926',
            'LUKMAN' => '230522124220',
            'YANDI' => '230330192332'
        );
        if ($key === null) {
            $val = array_values($list);
            $rand = array_rand($val);
            return $val[$rand];
        } else {
            if (array_key_exists($key, $list)) {
                return $list[$key];
            } else {
                return null;
            }
        }
    }

    private function _data()
    {
        $datalist = array(
            'PT MANDALA PUTERA PRIMA',
            'PT MAJU MUKTI JAYA',
            'PT JAYA KARYA PASUNDAN',
            'PT INFITECH SOLUSI INDONESIA',
            'PT INDONESIA FERRY PROPERTI',
            'PT HUTAMA MANGGALA PERSADA',
            'PT HARMONI PRIMA MEDIKA',
            'PT HANWHA LIFE INSURANCE INDONESIA',
            'PT GALUNG SOLUSI BANGUN TEKNIK',
            'PT ENDAVO CITA PERKASA',
            'PT DUA BINTANG PANEL',
            'PT DINAYA SEJAHTERA ABADI',
            'PT DINAMIKA ENERGI MARITIM',
            'PT DHARMA HUTAMA KARYA',
            'PT CITRA GUMILANG PRATAMA',
            'PT BONI CIPTA',
            'PT BINTANG MILENIUM PERKASA',
            'PT BINA MUDA SEJAHTERA',
            'PT TELEKOMUNIKASI INDONESIA (PERSERO) Tbk',
            'PT TECHNOLOGY KARYA MANDIRI',
            'PT TANATO MAKMUR LESTARI',
            'PT TAMA TELEMATIKA NUSANTARA',
            'PT SURYA MANUEL UTAMA',
            'PT SINAR LAUT DUA',
            'PT SINAR KENCANA INDAH',
            'PT SARANA KOMUNIKASI PERTIWI',
            'PT RAPIK KARYA MANDIRI',
            'PT PELITA KARYA PERKASA',
            'PT PALAPA TIMUR TELEMATIKA',
            'PT NUSANTARA TELEMATICS SYSTEMS',
            'PT MULTIFILING MITRA INDONESIA Tbk',
            'PT MULTI GRAHA TEKNIKA',
            'PT MORASHA INTI SHABIRA',
            'PT MORA TELEMATIKA INDONESIA',
            'PT MITRA SISTEMATIKA GLOBAL',
            'PT MEGAYASA ENGINEERING',
            'PT ANUGERAH SULTAN TEKNIK',
            'PT ANSINDA COMMUNICATION INDONESIA',
            'PT ALUPHI HIJAU LUMINA',
            'PT ALPHA CENTAURI INTERNATIONAL',
            'PT ALMAGA TALENTA TEKNOLOGI',
            'PT ADYAWINSA TELECOMMUNICATION & ELECTRICAL',
            'CV ZAHARA PERTIWI',
            'CV WIRA UTAMA',
            'CV WINNATAMA MANDIRI',
            'CV WINDU AGUNG JAYA',
            'CV VIRGO ADITAMA',
            'CV UNIVERSA INDOTAMA',
            'CV TUNAS RAYA ABADI',
            'CV TRI ANGELICA PUTRI',
            'CV TIOMIN SIMON',
            'CV TATA MULTI KONSTRUKSI',
            'CV TAPANULI KARYA',
            'CV SRI REJEKI SEJAHTERA',
            'CV SRI OKTAPIANI AGUNG',
            'CV SKALA RAYYA',
            'CV SAYAGA MANDRAGUNA',
            'CV SATRIA PRATAMA KONSTRUKSI',
            'CV SARIMAS PUTRA ANDALAS',
            'CV SAPTA PRIMA UTAMA',
            'CV RIZKI JAYA CONSTRUCTION',
            'CV RINA LESTARI',
            'CV RATUMAS TEKNIKINDO',
            'CV RAJA BANGUN PRADANA',
            'CV PUTRA TANOTUR',
            'CV PUTRA TAMSUNG SIGUMPAR',
            'CV PIRMA MANDIRI',
            'CV PERMATA QIARA UTAMA',
            'CV PARUNG BINGUNG SEJAHTERA',
            'CV NOVITAMA SUKSES MANDIRI',
            'CV NINDYA UTAMA MANDIRI',
            'CV NIKITA LUMBAN BUTAR',
            'CV MULIARAJA SEJAHTERA'
        );
        return $datalist;
    }
}
