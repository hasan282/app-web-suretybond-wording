<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LogTipe extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'SMALLINT',
                'constraint' => 3,
                'unsigned' => true,
                'auto_increment' => true
            ),
            'tipe' => array(
                'type' => 'VARCHAR',
                'constraint' => 32,
                'null' => true,
                'default' => null
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('log_tipe', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('log_tipe', true);
    }
}
