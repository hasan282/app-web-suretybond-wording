<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MenuSub extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'SMALLINT',
                'constraint' => 3,
                'unsigned' => true
            ),
            'id_menu' => array(
                'type' => 'SMALLINT',
                'constraint' => 3,
                'unsigned' => true,
                'null' => true,
                'default' => null
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
            ),
            'url' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'default' => null
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');
        $this->forge->addKey('id_menu', false, false, 'MENU');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('menu_sub', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('menu_sub', true);
    }
}
