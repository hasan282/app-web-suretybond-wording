<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JaminanProyek extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 3
            ),
            'proyek' => array(
                'type' => 'VARCHAR',
                'constraint' => 32,
                'null' => true,
                'default' => null
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('jaminan_proyek', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('jaminan_proyek', true);
    }
}
