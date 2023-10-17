<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Principal extends Migration
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
            'nama' => array(
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => true,
                'default' => null
            ),
            'telpon' => array(
                'type' => 'VARCHAR',
                'constraint' => 32,
                'null' => true,
                'default' => null
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => true,
                'default' => null
            ),
            'alamat' => array(
                'type' => 'VARCHAR',
                'constraint' => 256,
                'null' => true,
                'default' => null
            ),
            'id_office' => array(
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => true,
                'default' => null
            ),
            'id_marketing' => array(
                'type' => 'VARCHAR',
                'constraint' => 12,
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
        $this->forge->addKey('nama', false, false, 'PRINCIPAL');
        $this->forge->addKey('id_office', false, false, 'OFFICE');
        $this->forge->addKey('id_marketing', false, false, 'MARKETING');
        $this->forge->addKey('actives', false, false, 'ACTIVE');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('principal', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('principal', true);
    }
}
