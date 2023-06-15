<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JaminanIssued extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'VARCHAR',
                'constraint' => 16
            ),
            'id_jaminan' => array(
                'type' => 'VARCHAR',
                'constraint' => 18,
                'null' => true,
                'default' => null
            ),
            'issued' => array(
                'type' => 'INT',
                'constraint' => 1,
                'unsigned' => true,
                'default' => 0
            ),
            'printed' => array(
                'type' => 'INT',
                'constraint' => 1,
                'unsigned' => true,
                'default' => 0
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');
        $this->forge->addUniqueKey('id_jaminan', 'JAMINAN');
        $this->forge->addKey('issued', false, false, 'ISSUED');
        $this->forge->addKey('printed', false, false, 'PRINTED');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('jaminan_issued', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('jaminan_issued', true);
    }
}
