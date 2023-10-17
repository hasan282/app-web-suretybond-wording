<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JaminanNumber extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'id_cabang' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
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
            'conditions' => array(
                'type' => 'VARCHAR',
                'constraint' => 256,
                'null' => true,
                'default' => null
            ),
            'templates' => array(
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => true,
                'default' => null
            ),
            'registers' => array(
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => true,
                'default' => null
            ),
            'wording' => array(
                'type' => 'VARCHAR',
                'constraint' => 32,
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
        $this->forge->addKey('id_cabang', false, false, 'ASURANSI');
        $this->forge->addKey('id_jenis', false, false, 'JENIS');
        $this->forge->addKey('conditions', false, false, 'CONDITION');
        $this->forge->addKey('actives', false, false, 'ACTIVE');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('jaminan_number', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('jaminan_number', true);
    }
}
