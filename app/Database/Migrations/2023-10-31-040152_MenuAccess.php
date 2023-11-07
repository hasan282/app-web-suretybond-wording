<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MenuAccess extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'id_role' => array(
                'type' => 'SMALLINT',
                'constraint' => 3,
                'unsigned' => true,
                'null' => true,
                'default' => null
            ),
            'id_submenu' => array(
                'type' => 'SMALLINT',
                'constraint' => 3,
                'unsigned' => true,
                'null' => true,
                'default' => null
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');
        $this->forge->addKey('id_role', false, false, 'ROLE');
        $this->forge->addKey('id_submenu', false, false, 'SUBMENU');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('menu_access', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('menu_access', true);
    }
}
