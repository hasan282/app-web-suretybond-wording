<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PrincipalRate extends Seeder
{
    private $principal, $people, $rate;

    public function run()
    {
        $this->_running();
    }

    private function _data()
    {
        $data = array(

            array(
                'marketing' => 'ANAS',
                'principal' => array(
                    'CV INDAH DWI JAYA',
                    'PT PALAPA TIMUR TELEMATIKA',
                    'PT PALAPA RING BARAT',
                    'PT INDONESIA FERRY PROPERTI',
                    'CV KARYA MULIA',
                    'PT HARMONI PRIMA MEDIKA',
                    'PT MORA TELEMATIKA INDONESIA Tbk',
                    'PT PUTRA DUMAS LESTARI',
                    'PT ARTHA MULIA TRIJAYA',
                    'KJPP TOHA OKKY HERU & REKAN',
                    'PT MULTIFILING MITRA INDONESIA Tbk',
                    'PT DINAMIKA ENERGI MARITIM',
                    'PT YCP SOLIDIANCE INDONESIA',
                    'PT KARYAGRAHA UNGGULAGUNG',
                    'PT ENDAVO CITA PERKASA'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('BUMIDA'),
                        // BB, PB, APB, MB
                        'rate' => array(0.15, 0.15, 0.2, 0.15),
                        'minimum' => 70000,
                        'admin' => 30000
                    ),
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.125, 0.15, 0.175, 0.15),
                        'minimum' => 70000,
                        'admin' => 30000
                    )
                )
            ),

            array(
                'marketing' => 'ROCHMAN',
                'principal' => array(
                    'PT FIBERHOME TECHNOLOGIES INDONESIA'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM'),
                        'asuransi' => array('MAXIMUS', 'BUMIDA'),
                        // BB, PB, APB, MB
                        'rate' => array(0.2, 0.3, 0.35, 0.3),
                        'minimum' => 300000,
                        'admin' => 50000
                    ),
                    array(
                        'proyek' => array('SW'),
                        'asuransi' => array('MAXIMUS', 'BUMIDA'),
                        // BB, PB, APB, MB
                        'rate' => array(0.3, 0.4, 0.45, 0.4),
                        'minimum' => 450000,
                        'admin' => 50000
                    )
                )
            ),

            array(
                'marketing' => 'ROCHMAN',
                'principal' => array(
                    'CV GARDENIA BAYANGKARA'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.2, 0.35, 0.45, 0.35),
                        'minimum' => 350000,
                        'admin' => 60000
                    )
                )
            ),

            array(
                'marketing' => 'MARTHIN',
                'principal' => array(
                    'PT BERCA HARDAYAPERKASA'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.125, 0.175, 0.2, 0.175),
                        'minimum' => 120000,
                        'admin' => 30000
                    ),
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('BUMIDA'),
                        // BB, PB, APB, MB
                        'rate' => array(0.125, 0.175, 0.2, 0.175),
                        'minimum' => 220000,
                        'admin' => 30000
                    )
                )
            ),

            array(
                'marketing' => 'LUKMAN',
                'principal' => array(
                    'PT INFITECH SOLUSI INDONESIA',
                    'PT MORASHA INTI SHABIRA',
                    'PT FIMAR BERDAYA SINERGITAMA'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.125, 0.2, 0.25, 0.2),
                        'minimum' => 60000,
                        'admin' => 20000
                    )
                )
            ),

            array(
                'marketing' => 'DEWI',
                'principal' => array(
                    'CV ARUTAMA MANDIRI',
                    'CV ASA KARYA',
                    'CV BATAVIA PERDANA',
                    'CV BENTO KARYA UTAMA',
                    'CV BERKAH MADANI',
                    'CV CAHYA LESTARI',
                    'CV CITRA PERSADA',
                    'CV DALLAH JAYA UTAMA',
                    'CV DANIEL KARYA MANDIRI',
                    'CV DERA CIPTA AGUNG',
                    'CV ELLENA SUKSES MAKMUR',
                    'CV GANESHA SENTOSA',
                    'CV INSANI BERDIKARI',
                    'CV KARYA USAHA BERSAMA',
                    'CV MARGANDA JAYA',
                    'CV MITRA JASA',
                    'CV MITRA PEMBANGUNAN',
                    'CV MULIA KARYA ABADI',
                    'CV MULIARAJA SEJAHTERA',
                    'CV NIKITA LUMBANBUTAR',
                    'CV NOVITAMA SUKSES MANDIRI',
                    'CV PIRMA MANDIRI',
                    'CV PUTRA TAMSUNG SIGUMPAR',
                    'CV PUTRA TANOTUR',
                    'CV SAPTA PRIMA UTAMA',
                    'CV SAYAGA MANDRAGUNA',
                    'CV SRI OKTAPIANI AGUNG',
                    'CV TIOMIN SIMON',
                    'CV ZAHARA PERTIWI',
                    'PT AULIA MITRA HAYATI',
                    'PT BINA MUDA SEJAHTERA',
                    'PT DINAYA SEJAHTERA ABADI',
                    'PT KERTAU LINGKAR SELARAS',
                    'PT RAPIK KARYA MANDIRI',
                    'PT SINAR LAUT DUA'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS', 'BINAGRIYA'),
                        // BB, PB, APB, MB
                        'rate' => array(0.15, 0.2, 0.2, 0.2),
                        'minimum' => 70000,
                        'admin' => 30000
                    )
                )
            ),

            array(
                'marketing' => 'YANDI',
                'principal' => array(
                    'CV ALEKSA MENCO ABADI',
                    'CV BINAFHIR SEJAHTERA',
                    'CV DUAPUTRI BERKAH SEJAHTERA',
                    'CV FIRAZ ADIRAJASA',
                    'CV KUNTUM KESUMA',
                    'CV MAHAKARYA BANGUN JAYA',
                    'CV MEDITYA KARYA',
                    'CV NINDYA UTAMA MANDIRI',
                    'CV PARUNG BINGUNG SEJAHTERA',
                    'CV SRI REJEKI SEJAHTERA',
                    'CV VIRGO ADITAMA',
                    'PT HUTAMA MANGGALA PERSADA',
                    'PT PELITA KARYA PERKASA'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS', 'BINAGRIYA'),
                        // BB, PB, APB, MB
                        'rate' => array(0.15, 0.2, 0.2, 0.2),
                        'minimum' => 70000,
                        'admin' => 30000
                    )
                )
            ),

            array(
                'marketing' => 'ICHSAN',
                'principal' => array(
                    'PT LESTARI SAMUDRA KSO',
                    'CV RAJA BANGUN PRADANA'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS', 'BINAGRIYA'),
                        // BB, PB, APB, MB
                        'rate' => array(0.15, 0.2, 0.2, 0.2),
                        'minimum' => 70000,
                        'admin' => 30000
                    )
                )
            ),

            // --------------------------------------------------------------------

            array(
                'marketing' => 'ROCHMAN',
                'principal' => array(
                    'CV ADYAWINSA TELECOMMUNICATION & ELECTRICAL'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.2, 0.3, 0.35, 0.3),
                        'minimum' => 300000,
                        'admin' => 60000
                    )
                )
            ),

            array(
                'marketing' => 'HILMAN',
                'principal' => array(
                    'CV GOLDEN BRIDGE SYNERGY'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.25, 0.25, 0.25, 0.25),
                        'minimum' => 350000,
                        'admin' => 60000
                    )
                )
            ),

            array(
                'marketing' => 'ROCHMAN',
                'principal' => array(
                    'CV JEMBAR UTAMA'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.25, 0.35, 0.4, 0.35),
                        'minimum' => 350000,
                        'admin' => 60000
                    )
                )
            ),

            array(
                'marketing' => 'ROCHMAN',
                'principal' => array(
                    'CV PEMBANGUNAN PERUMAHAN TIRTA RIAU'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.3, 0.3, 0.3, 0.3),
                        'minimum' => 350000,
                        'admin' => 60000
                    )
                )
            ),

            array(
                'marketing' => 'ROCHMAN',
                'principal' => array(
                    'CV TAMA TELEMATIKA NUSANTARA'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.2, 0.35, 0.4, 0.35),
                        'minimum' => 300000,
                        'admin' => 60000
                    )
                )
            ),

            array(
                'marketing' => 'ROCHMAN',
                'principal' => array(
                    'CV SISTEM INTEGRASI NUSANTARA'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.25, 0.35, 0.4, 0.35),
                        'minimum' => 300000,
                        'admin' => 60000
                    )
                )
            ),

            array(
                'marketing' => 'ROCHMAN',
                'principal' => array(
                    'CV TANATO MAKMUR LESTARI'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.2, 0.3, 0.35, 0.3),
                        'minimum' => 360000,
                        'admin' => 60000
                    )
                )
            ),

            array(
                'marketing' => 'INDRA',
                'principal' => array(
                    'CV ALUPHI HIJAU LUMINA',
                    'CV MANDALA PUTERA PRIMA'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.12, 0.15, 0.175, 0.15),
                        'minimum' => 300000,
                        'admin' => 60000
                    )
                )
            ),

            array(
                'marketing' => 'ROCHMAN',
                'principal' => array(
                    'CV ZEEMAH KARYA UTAMA'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.2, 0.35, 0.4, 0.35),
                        'minimum' => 350000,
                        'admin' => 60000
                    )
                )
            ),

            array(
                'marketing' => 'ROCHMAN',
                'principal' => array(
                    'CV ASTON PRIMA RAYA'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.2, 0.3, 0.35, 0.3),
                        'minimum' => 300000,
                        'admin' => 60000
                    )
                )
            ),

            array(
                'marketing' => 'ROCHMAN',
                'principal' => array(
                    'CV ZMG TELEKOMUNIKASI SERVISE INDONESIA'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.2, 0.3, 0.35, 0.3),
                        'minimum' => 300000,
                        'admin' => 60000
                    ),
                    array(
                        'proyek' => array('SW'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.3, 0.4, 0.5, 0.4),
                        'minimum' => 450000,
                        'admin' => 60000
                    )
                )
            ),

            array(
                'marketing' => 'ROCHMAN',
                'principal' => array(
                    'CV WIDEBAND MEDIA INDONESIA'
                ),
                'rate' => array(
                    array(
                        'proyek' => array('PM', 'SW'),
                        'asuransi' => array('MAXIMUS'),
                        // BB, PB, APB, MB
                        'rate' => array(0.2, 0.3, 0.35, 0.3),
                        'minimum' => 300000,
                        'admin' => 60000
                    )
                )
            ),
        );
        return $data;
    }   

    private function _running()
    {
        helper(['format', 'enkripsi']);
        $office = '221002065931';
        foreach ($this->_data() as $data) {
            $marketing = $this->_marketing($data['marketing']);
            foreach ($data['principal'] as $principal) {
                $base = create_id(0, true);
                $idpr = $base . mt_rand(1000, 9990);
                $idpp = $base . mt_rand(1000, 9990);
                $this->principal[] = array(
                    'id' => $idpr,
                    'enkripsi' => sha3hash($idpr, 50),
                    'nama' => $principal,
                    'alamat' => 'Jl. Raya No.' . mt_rand(10, 290),
                    'id_office' => $office,
                    'id_marketing' => $marketing,
                    'actives' => 1
                );
                $this->people[] = array(
                    'id' => $idpp,
                    'enkripsi' => sha3hash($idpp, 50),
                    'id_principal' => $idpr,
                    'nama' => $this->_generate_name(),
                    'jabatan' => 'Direktur Utama',
                    'actives' => 1
                );
                foreach ($data['rate'] as $rate) {
                    $this->_rates($rate, $idpr);
                }
            }
        }
        $this->db->table('principal')->insertBatch($this->principal);
        $this->db->table('principal_people')->insertBatch($this->people);
        $this->db->table('principal_rate')->insertBatch($this->rate);
    }

    private function _rates(array $rate, string $principal_id)
    {
        $asuransi = array(
            'MAXIMUS' => '221006103529',
            'BUMIDA' => '221005201325',
            'BINAGRIYA' => '221002154456'
        );
        $proyek = array(
            'PM' => '101',
            'SW' => '102'
        );
        $jaminan = array('101', '102', '103', '104');
        foreach ($rate['proyek'] as $pr) {
            foreach ($rate['asuransi'] as $asr) {
                foreach ($rate['rate'] as $index => $rt) {
                    if ($rt !== null) {
                        $this->rate[] = array(
                            'id_principal' => $principal_id,
                            'id_asuransi' => $asuransi[$asr],
                            'id_jenis' => $jaminan[$index],
                            'id_proyek' => $proyek[$pr],
                            'rate_percent' => $rt,
                            'minimum' => $rate['minimum'],
                            'admin_fee' => $rate['admin']
                        );
                    }
                }
            }
        }
    }

    private function _marketing(?string $key = null)
    {
        $list = array(
            'ROCHMAN' => '230201125148',
            'ANAS' => '230505133926',
            'LUKMAN' => '230522124220',
            'YANDI' => '230330192332',
            'MARTHIN' => '230209115907',
            'DEWI' => '230302235138',
            'ICHSAN' => '230405051206'
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

    private function _generate_name()
    {
        $male_depan = array(
            'Ahmad', 'Budi', 'Chandra', 'Eka', 'Hadi', 'Indra', 'Joko', 'Oscar', 'Tono'
        );
        $male_belakang = array(
            'Santoso', 'Wijaya', 'Kusuma', 'Susanto', 'Halim', 'Yusuf', 'Hidayat', 'Nugroho', 'Wahyuni', 'Setiawan', 'Purnama', 'Suryadi'
        );
        $female_depan = array(
            'Dewi', 'Eka', 'Fitri', 'Gita', 'Kartika', 'Lia', 'Mega', 'Nina', 'Putri', 'Rina', 'Siti', 'Wati'
        );
        $female_belakang = array(
            'Wijayanti', 'Kusuma', 'Lestari', 'Susanti', 'Halimah', 'Pratiwi', 'Wahyuni', 'Puspitasari', 'Setiawati', 'Purnamasari', 'Utami'
        );
        $gender = array('male', 'female');
        $gen = $gender[array_rand($gender)];
        $depan = ${$gen . '_depan'}[array_rand(${$gen . '_depan'})];
        $belakang = ${$gen . '_belakang'}[array_rand(${$gen . '_belakang'})];
        return $depan . ' ' . $belakang;
    }
}
