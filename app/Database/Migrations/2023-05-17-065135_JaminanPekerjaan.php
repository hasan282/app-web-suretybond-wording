<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JaminanPekerjaan extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'SMALLINT',
                'unsigned' => true,
                'constraint' => 3
            ),
            'pekerjaan' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
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
        $this->forge->addKey('actives', false, false, 'ACTIVE');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('jaminan_pekerjaan', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('jaminan_pekerjaan', true);
    }
}
