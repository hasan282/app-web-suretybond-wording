<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JaminanBlanko extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'id_blanko' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'default' => null
            ),
            'id_jaminan' => array(
                'type' => 'VARCHAR',
                'constraint' => 18,
                'null' => true,
                'default' => null
            ),
            'prefix' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'default' => null
            ),
            'nomor' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'default' => null
            ),
            'status' => array(
                'type' => 'ENUM',
                'constraint' => ['USED', 'CRASH'],
                'null' => true,
                'default' => null
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');
        $this->forge->addUniqueKey('id_blanko', 'BLANKO');
        $this->forge->addKey('id_jaminan', false, false, 'JAMINAN');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('jaminan_blanko', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('jaminan_blanko', true);
    }
}
