<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menus extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'SMALLINT',
                'constraint' => 3,
                'unsigned' => true
            ),
            'text' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'default' => null
            ),
            'icon' => array(
                'type' => 'VARCHAR',
                'constraint' => 32,
                'null' => true,
                'default' => null
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('menus', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('menus', true);
    }
}
