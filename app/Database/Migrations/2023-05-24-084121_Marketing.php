<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Marketing extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'VARCHAR',
                'constraint' => 12
            ),
            'enkripsi' => array(
                'type' => 'VARCHAR',
                'constraint' => 40,
                'null' => true,
                'default' => null
            ),
            'nama' => array(
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => true,
                'default' => null
            ),
            'actives' => array(
                'type' => 'TINYINT',
                'constraint' => 1,
                'unsigned' => true,
                'default' => 0
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');
        $this->forge->addUniqueKey('enkripsi', 'ID');
        $this->forge->addKey('actives', false, false, 'ACTIVE');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('marketing', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('marketing', true);
    }
}
