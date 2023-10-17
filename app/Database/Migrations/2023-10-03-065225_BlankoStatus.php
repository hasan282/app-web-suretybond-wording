<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BlankoStatus extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'SMALLINT',
                'unsigned' => true,
                'constraint' => 3
            ),
            'status' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'default' => null
            ),
            'color' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'default' => null
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('blanko_status', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('blanko_status', true);
    }
}
