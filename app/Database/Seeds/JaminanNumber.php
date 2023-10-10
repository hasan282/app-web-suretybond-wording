<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JaminanNumber extends Seeder
{
    public function run()
    {
        $data = array(
            // BUMIDA -------------------------------------------------------------------
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
            ),
            // MAXIMUS -------------------------------------------------------------------------------
            // Jaminan Penawaran
            array(
                'id_cabang' => '2305041504511821',
                'id_jenis' => 101,
                'conditions' => 'proyek=negara,konstruksi=0,konstruksi=1,conditional=0,conditional=1',
                'templates' => '(:Y1).(:M2).02.1103.(:reg)',
                'registers' => 'offset=0',
                'wording' => 'WORDING_BB_PM',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041504511821',
                'id_jenis' => 101,
                'conditions' => 'proyek=swasta,konstruksi=0,konstruksi=1,conditional=0,conditional=1',
                'templates' => '(:Y1).(:M2).02.1103.(:reg)',
                'registers' => 'offset=0',
                'wording' => 'WORDING_BB_SW',
                'actives' => 1
            ),

            // Jaminan Pelaksanaan
            array(
                'id_cabang' => '2305041504511821',
                'id_jenis' => 102,
                'conditions' => 'proyek=negara,konstruksi=0,konstruksi=1,conditional=0,conditional=1',
                'templates' => '(:Y1).(:M2).02.1105.(:reg)',
                'registers' => 'offset=0',
                'wording' => 'WORDING_PB_PM',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041504511821',
                'id_jenis' => 102,
                'conditions' => 'proyek=swasta,konstruksi=0,konstruksi=1,conditional=0,conditional=1',
                'templates' => '(:Y1).(:M2).02.1105.(:reg)',
                'registers' => 'offset=0',
                'wording' => 'WORDING_PB_SW',
                'actives' => 1
            ),

            // Jaminan Uang Muka
            array(
                'id_cabang' => '2305041504511821',
                'id_jenis' => 103,
                'conditions' => 'proyek=negara,konstruksi=0,konstruksi=1,conditional=0,conditional=1',
                'templates' => '(:Y1).(:M2).02.1104.(:reg)',
                'registers' => 'offset=0',
                'wording' => 'WORDING_APB_PM',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041504511821',
                'id_jenis' => 103,
                'conditions' => 'proyek=swasta,konstruksi=0,konstruksi=1,conditional=0,conditional=1',
                'templates' => '(:Y1).(:M2).02.1104.(:reg)',
                'registers' => 'offset=0',
                'wording' => 'WORDING_APB_SW',
                'actives' => 1
            ),

            // Jaminan Pemeliharaan
            array(
                'id_cabang' => '2305041504511821',
                'id_jenis' => 104,
                'conditions' => 'proyek=negara,konstruksi=0,konstruksi=1,conditional=0,conditional=1',
                'templates' => '(:Y1).(:M2).02.1106.(:reg)',
                'registers' => 'offset=0',
                'wording' => 'WORDING_MB_PM',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041504511821',
                'id_jenis' => 104,
                'conditions' => 'proyek=swasta,konstruksi=0,konstruksi=1,conditional=0,conditional=1',
                'templates' => '(:Y1).(:M2).02.1106.(:reg)',
                'registers' => 'offset=0',
                'wording' => 'WORDING_MB_SW',
                'actives' => 1
            ),

            // BINAGRIYA -------------------------------------------------------------------------------
            // Jaminan Penawaran
            array(
                'id_cabang' => '2305041517287910',
                'id_jenis' => 101,
                'conditions' => 'proyek=negara,konstruksi=0,konstruksi=1,conditional=0,conditional=1',
                'templates' => '1161401(:Y1)(:reg)/M01JI00002',
                'registers' => 'offset=0',
                'wording' => 'WORDING_BB_PM',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041517287910',
                'id_jenis' => 101,
                'conditions' => 'proyek=swasta,konstruksi=0,konstruksi=1,conditional=0,conditional=1',
                'templates' => '1161401(:Y1)(:reg)/M01JI00002',
                'registers' => 'offset=0',
                'wording' => 'WORDING_BB_SW',
                'actives' => 1
            ),

            // Jaminan Pelaksanaan
            array(
                'id_cabang' => '2305041517287910',
                'id_jenis' => 102,
                'conditions' => 'proyek=negara,konstruksi=0,konstruksi=1,conditional=0,conditional=1',
                'templates' => '1161402(:Y1)(:reg)/M01JI00002',
                'registers' => 'offset=0',
                'wording' => 'WORDING_PB_PM',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041517287910',
                'id_jenis' => 102,
                'conditions' => 'proyek=swasta,konstruksi=0,konstruksi=1,conditional=0,conditional=1',
                'templates' => '1161402(:Y1)(:reg)/M01JI00002',
                'registers' => 'offset=0',
                'wording' => 'WORDING_PB_SW',
                'actives' => 1
            ),

            // Jaminan Uang Muka
            array(
                'id_cabang' => '2305041517287910',
                'id_jenis' => 103,
                'conditions' => 'proyek=negara,konstruksi=0,konstruksi=1,conditional=0,conditional=1',
                'templates' => '1161403(:Y1)(:reg)/M01JI00002',
                'registers' => 'offset=0',
                'wording' => 'WORDING_APB_PM',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041517287910',
                'id_jenis' => 103,
                'conditions' => 'proyek=swasta,konstruksi=0,konstruksi=1,conditional=0,conditional=1',
                'templates' => '1161403(:Y1)(:reg)/M01JI00002',
                'registers' => 'offset=0',
                'wording' => 'WORDING_APB_SW',
                'actives' => 1
            ),

            // Jaminan Pemeliharaan
            array(
                'id_cabang' => '2305041517287910',
                'id_jenis' => 104,
                'conditions' => 'proyek=negara,konstruksi=0,konstruksi=1,conditional=0,conditional=1',
                'templates' => '1161404(:Y1)(:reg)/M01JI00002',
                'registers' => 'offset=0',
                'wording' => 'WORDING_MB_PM',
                'actives' => 1
            ),
            array(
                'id_cabang' => '2305041517287910',
                'id_jenis' => 104,
                'conditions' => 'proyek=swasta,konstruksi=0,konstruksi=1,conditional=0,conditional=1',
                'templates' => '1161404(:Y1)(:reg)/M01JI00002',
                'registers' => 'offset=0',
                'wording' => 'WORDING_MB_SW',
                'actives' => 1
            ),

        );
        $this->db->table('jaminan_number')->insertBatch($data);
    }
}
