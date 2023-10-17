<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserRole extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'SMALLINT',
                'unsigned' => true,
                'constraint' => 3
            ),
            'role' => array(
                'type' => 'VARCHAR',
                'constraint' => 32,
                'null' => true,
                'default' => null
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('user_role', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('user_role', true);
    }
}
