<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JaminanNumber extends Seeder
{
    public function run()
    {
        $data = array(
            // BUMIDA -----------------------------------------
            // Jaminan Penawaran
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 101,
                'conditions' => 'konstruksi=1,conditional=1,proyek=swasta,proyek=negara',
                'templates' => 'PSP10441101(:Y1)(:M2)(:reg)',
                'registers' => 'offset=-4',
                'wording' => 'BUMIDA_BB1_KC',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 101,
                'conditions' => 'konstruksi=0,conditional=1,proyek=swasta,proyek=negara',
                'templates' => 'PSP10441121(:Y1)(:M2)(:reg)',
                'registers' => 'offset=-4',
                'wording' => 'BUMIDA_BB2_NKC',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 101,
                'conditions' => 'konstruksi=1,conditional=0,proyek=swasta,proyek=negara',
                'templates' => 'PSP10441141(:Y1)(:M2)(:reg)',
                'registers' => 'offset=-4',
                'wording' => 'BUMIDA_BB3_KUC',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 101,
                'conditions' => 'konstruksi=0,conditional=0,proyek=swasta,proyek=negara',
                'templates' => 'PSP10441125(:Y1)(:M2)(:reg)',
                'registers' => 'offset=-4',
                'wording' => 'BUMIDA_BB4_NKUC',
                'actives' => 1
            ),
            // Jaminan Pelaksanaan
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 102,
                'conditions' => 'konstruksi=1,conditional=1,proyek=swasta,proyek=negara',
                'templates' => 'PSP10441102(:Y1)(:M2)(:reg)',
                'registers' => 'offset=-4',
                'wording' => 'BUMIDA_PB1_KC',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 102,
                'conditions' => 'konstruksi=0,conditional=1,proyek=swasta,proyek=negara',
                'templates' => 'PSP10441122(:Y1)(:M2)(:reg)',
                'registers' => 'offset=-4',
                'wording' => 'BUMIDA_PB2_NKC',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 102,
                'conditions' => 'konstruksi=1,conditional=0,proyek=swasta,proyek=negara',
                'templates' => 'PSP10441142(:Y1)(:M2)(:reg)',
                'registers' => 'offset=-4',
                'wording' => 'BUMIDA_PB3_KUC',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 102,
                'conditions' => 'konstruksi=0,conditional=0,proyek=swasta,proyek=negara',
                'templates' => 'PSP10441126(:Y1)(:M2)(:reg)',
                'registers' => 'offset=-4',
                'wording' => 'BUMIDA_PB4_NKUC',
                'actives' => 1
            ),
            // Jaminan Uang Muka
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 103,
                'conditions' => 'konstruksi=1,conditional=1,proyek=swasta,proyek=negara',
                'templates' => 'PSP10441103(:Y1)(:M2)(:reg)',
                'registers' => 'offset=-4',
                'wording' => 'BUMIDA_APB1_KC',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 103,
                'conditions' => 'konstruksi=0,conditional=1,proyek=swasta,proyek=negara',
                'templates' => 'PSP10441123(:Y1)(:M2)(:reg)',
                'registers' => 'offset=-4',
                'wording' => 'BUMIDA_APB2_NKC',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 103,
                'conditions' => 'konstruksi=1,conditional=0,proyek=swasta,proyek=negara',
                'templates' => 'PSP10441143(:Y1)(:M2)(:reg)',
                'registers' => 'offset=-4',
                'wording' => 'BUMIDA_APB3_KUC',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 103,
                'conditions' => 'konstruksi=0,conditional=0,proyek=swasta,proyek=negara',
                'templates' => 'PSP10441127(:Y1)(:M2)(:reg)',
                'registers' => 'offset=-4',
                'wording' => 'BUMIDA_APB4_NKUC',
                'actives' => 1
            ),
            // Jaminan Pemeliharaan
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 104,
                'conditions' => 'konstruksi=1,conditional=1,proyek=swasta,proyek=negara',
                'templates' => 'PSP10441104(:Y1)(:M2)(:reg)',
                'registers' => 'offset=-4',
                'wording' => 'BUMIDA_MB1_KC',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 104,
                'conditions' => 'konstruksi=0,conditional=1,proyek=swasta,proyek=negara',
                'templates' => 'PSP10441124(:Y1)(:M2)(:reg)',
                'registers' => 'offset=-4',
                'wording' => 'BUMIDA_MB2_NKC',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 104,
                'conditions' => 'konstruksi=1,conditional=0,proyek=swasta,proyek=negara',
                'templates' => 'PSP10441144(:Y1)(:M2)(:reg)',
                'registers' => 'offset=-4',
                'wording' => 'BUMIDA_MB3_KUC',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041529071588',
                'id_jenis' => 104,
                'conditions' => 'konstruksi=0,conditional=0,proyek=swasta,proyek=negara',
                'templates' => 'PSP10441128(:Y1)(:M2)(:reg)',
                'registers' => 'offset=-4',
                'wording' => 'BUMIDA_MB4_NKUC',
                'actives' => 1
            )
        );
        $this->db->table('jaminan_number')->insertBatch($data);
    }
}
