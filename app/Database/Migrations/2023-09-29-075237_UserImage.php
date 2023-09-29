<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserImage extends Migration
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
                'constraint' => 40,
                'null' => true,
                'default' => null
            ),
            'image_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => true,
                'default' => null
            ),
            'image_path' => array(
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => true,
                'default' => null
            ),
            'id_user' => array(
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => true,
                'default' => null
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');
        $this->forge->addUniqueKey('enkripsi', 'ID');
        $this->forge->addKey('id_user', false, false, 'USER');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('user_image', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('user_image', true);
    }
}
