<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Blanko extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'VARCHAR',
                'constraint' => 16
            ),
            'enkripsi' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
                'default' => null
            ),
            'prefix' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'default' => null
            ),
            'nomor' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'default' => null
            ),
            'id_cabang' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'default' => null
            ),
            'id_office' => array(
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => true,
                'default' => null
            ),
            'id_status' => array(
                'type' => 'SMALLINT',
                'constraint' => 3,
                'unsigned' => true,
                'null' => true,
                'default' => null
            ),
            'arrived' => array(
                'type' => 'DATE',
                'null' => true,
                'default' => null
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');
        $this->forge->addUniqueKey('enkripsi', 'ID');
        $this->forge->addKey('nomor', false, false, 'NOMOR');
        $this->forge->addKey('id_cabang', false, false, 'ASURANSI');
        $this->forge->addKey('id_office', false, false, 'OFFICE');
        $this->forge->addKey('id_status', false, false, 'STATUS');
        $this->forge->addKey('arrived', false, false, 'ARRIVE');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('blanko', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('blanko', true);
    }
}
