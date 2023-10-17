<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Currency extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'SMALLINT',
                'constraint' => 4,
                'unsigned' => true,
                'auto_increment' => true
            ),
            'nama' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'default' => null
            ),
            'codename' => array(
                'type' => 'VARCHAR',
                'constraint' => 8,
                'null' => true,
                'default' => null
            ),
            'symbol' => array(
                'type' => 'VARCHAR',
                'constraint' => 8,
                'null' => true,
                'default' => null
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');
        $this->forge->addUniqueKey('codename', 'CODE');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('currency', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('currency', true);
    }
}
