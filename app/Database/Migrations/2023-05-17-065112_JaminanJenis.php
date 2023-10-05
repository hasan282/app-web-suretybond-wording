<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JaminanJenis extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'SMALLINT',
                'unsigned' => true,
                'constraint' => 3
            ),
            'jenis' => array(
                'type' => 'VARCHAR',
                'constraint' => 32,
                'null' => true,
                'default' => null
            ),
            'jenis_eng' => array(
                'type' => 'VARCHAR',
                'constraint' => 32,
                'null' => true,
                'default' => null
            ),
            'singkat' => array(
                'type' => 'VARCHAR',
                'constraint' => 8,
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
        $this->forge->addKey('actives', false, false, 'ACTIVE');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('jaminan_jenis', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('jaminan_jenis', true);
    }
}
