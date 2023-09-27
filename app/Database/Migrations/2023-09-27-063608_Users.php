<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
                'constraint' => 50,
                'null' => true,
                'default' => null
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => 32,
                'null' => true,
                'default' => null
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => 40,
                'null' => true,
                'default' => null
            ),
            'nama' => array(
                'type' => 'VARCHAR',
                'constraint' => 32,
                'null' => true,
                'default' => null
            ),
            'id_office' => array(
                'type' => 'VARCHAR',
                'constraint' => 32,
                'null' => true,
                'default' => null
            ),
            'id_access' => array(
                'type' => 'INT',
                'constraint' => 3,
                'null' => true,
                'default' => null
            ),
            'actives' => array(
                'type' => 'INT',
                'constraint' => 1,
                'unsigned' => true,
                'default' => 0
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');
        $this->forge->addUniqueKey('enkripsi', 'ID');
        $this->forge->addUniqueKey('username', 'USER');
        $this->forge->addKey('id_office', false, false, 'OFFICE');
        $this->forge->addKey('id_access', false, false, 'ACCESS');
        $this->forge->addKey('actives', false, false, 'ACTIVE');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('users', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('users', true);
    }
}
