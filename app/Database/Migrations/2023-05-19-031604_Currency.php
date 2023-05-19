<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Currency extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 4
            ),
            'nama' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'default' => null
            ),
            'symbol_1' => array(
                'type' => 'VARCHAR',
                'constraint' => 8,
                'null' => true,
                'default' => null
            ),
            'symbol_2' => array(
                'type' => 'VARCHAR',
                'constraint' => 8,
                'null' => true,
                'default' => null
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('currency', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('currency', true);
    }
}
