<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jaminan extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'VARCHAR',
                'constraint' => 18
            ),
            'enkripsi' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'null' => true,
                'default' => null
            ),
            'id_principal_people' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'default' => null
            ),
            'id_asuransi_people' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'default' => null
            ),
            'id_proyek' => array(
                'type' => 'SMALLINT',
                'constraint' => 3,
                'unsigned' => true,
                'null' => true,
                'default' => null
            ),
            'nama_proyek' => array(
                'type' => 'VARCHAR',
                'constraint' => 256,
                'null' => true,
                'default' => null
            ),
            'alamat_proyek' => array(
                'type' => 'VARCHAR',
                'constraint' => 256,
                'null' => true,
                'default' => null
            ),
            'dokumen' => array(
                'type' => 'VARCHAR',
                'constraint' => 512,
                'null' => true,
                'default' => null
            ),
            'dokumen_date' => array(
                'type' => 'DATE',
                'null' => true,
                'default' => null
            ),
            'id_pekerjaan' => array(
                'type' => 'SMALLINT',
                'constraint' => 3,
                'unsigned' => true,
                'null' => true,
                'default' => null
            ),
            'obligee' => array(
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => true,
                'default' => null
            ),
            'alamat_obligee' => array(
                'type' => 'VARCHAR',
                'constraint' => 256,
                'null' => true,
                'default' => null
            ),
            'id_jenis' => array(
                'type' => 'SMALLINT',
                'constraint' => 3,
                'unsigned' => true,
                'null' => true,
                'default' => null
            ),
            'nomor' => array(
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => true,
                'default' => null
            ),
            'id_currency' => array(
                'type' => 'SMALLINT',
                'constraint' => 4,
                'unsigned' => true,
                'null' => true,
                'default' => null
            ),
            'nilai_proyek' => array(
                'type' => 'DECIMAL',
                'constraint' => '15,2',
                'null' => true,
                'default' => null
            ),
            'nilai_jaminan' => array(
                'type' => 'DECIMAL',
                'constraint' => '15,2',
                'null' => true,
                'default' => null
            ),
            'conditional' => array(
                'type' => 'TINYINT',
                'constraint' => 1,
                'unsigned' => true,
                'null' => true,
                'default' => null
            ),
            'date_from' => array(
                'type' => 'DATE',
                'null' => true,
                'default' => null
            ),
            'date_to' => array(
                'type' => 'DATE',
                'null' => true,
                'default' => null
            ),
            'days' => array(
                'type' => 'INT',
                'constraint' => 8,
                'unsigned' => true,
                'null' => true,
                'default' => null
            ),
            'issued_place' => array(
                'type' => 'VARCHAR',
                'constraint' => 32,
                'null' => true,
                'default' => null
            ),
            'issued_date' => array(
                'type' => 'DATE',
                'null' => true,
                'default' => null
            ),
            'bahasa' => array(
                'type' => 'ENUM',
                'constraint' => ['EN', 'ID'],
                'null' => true,
                'default' => null
            ),
            'id_office' => array(
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => true,
                'default' => null
            ),
            'actives' => array(
                'type' => 'TINYINT',
                'constraint' => 1,
                'unsigned' => true,
                'default' => 0
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');
        $this->forge->addUniqueKey('enkripsi', 'ID');
        $this->forge->addKey('id_principal_people', false, false, 'PRINCIPAL');
        $this->forge->addKey('id_asuransi_people', false, false, 'ASURANSI');
        $this->forge->addKey('id_proyek', false, false, 'PROYEK');
        $this->forge->addKey('id_jenis', false, false, 'JENIS');
        $this->forge->addKey('id_pekerjaan', false, false, 'PEKERJAAN');
        $this->forge->addKey('id_currency', false, false, 'CURRENCY');
        $this->forge->addKey('date_from', false, false, 'DATEFROM');
        $this->forge->addKey('date_to', false, false, 'DATETO');
        $this->forge->addKey('issued_date', false, false, 'ISSUED');
        $this->forge->addKey('id_office', false, false, 'OFFICE');
        $this->forge->addKey('actives', false, false, 'ACTIVE');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('jaminan', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('jaminan', true);
    }
}
