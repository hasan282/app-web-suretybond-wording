<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PrintProfile extends Migration
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
            'profile' => array(
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => true,
                'default' => null
            ),
            'paper' => array(
                'type' => 'ENUM',
                'constraint' => ['A4', 'LEGAL', 'LETTER'],
                'null' => true,
                'default' => null
            ),
            'page_top' => array(
                'type' => 'INT',
                'constraint' => 4,
                'unsigned' => true,
                'default' => 0
            ),
            'page_bottom' => array(
                'type' => 'INT',
                'constraint' => 4,
                'unsigned' => true,
                'default' => 0
            ),
            'page_left' => array(
                'type' => 'INT',
                'constraint' => 4,
                'unsigned' => true,
                'default' => 0
            ),
            'page_right' => array(
                'type' => 'INT',
                'constraint' => 4,
                'unsigned' => true,
                'default' => 0
            ),
            'spacing' => array(
                'type' => 'INT',
                'constraint' => 3,
                'unsigned' => true,
                'default' => 100
            ),
            'sign_margin' => array(
                'type' => 'INT',
                'constraint' => 4,
                'unsigned' => true,
                'default' => 0
            ),
            'sign_width' => array(
                'type' => 'INT',
                'constraint' => 4,
                'unsigned' => true,
                'default' => 0
            ),
            'sign_height' => array(
                'type' => 'INT',
                'constraint' => 4,
                'unsigned' => true,
                'default' => 0
            ),
            'sign_space' => array(
                'type' => 'INT',
                'constraint' => 4,
                'unsigned' => true,
                'default' => 0
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');
        $this->forge->addUniqueKey('enkripsi', 'ID');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('print_profile', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('print_profile', true);
    }
}
