<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prints extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'id_jaminan' => array(
                'type' => 'VARCHAR',
                'constraint' => 18,
                'null' => true,
                'default' => null
            ),
            'id_profile' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'default' => null
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');
        $this->forge->addKey('id_jaminan', false, false, 'JAMINAN');
        $this->forge->addKey('id_profile', false, false, 'PROFILE');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('prints', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('prints', true);
    }
}
