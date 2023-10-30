<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserLog extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'logstamp' => array(
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => true,
                'default' => null
            ),
            'id_user' => array(
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => true,
                'default' => null
            ),
            'id_tipe' => array(
                'type' => 'SMALLINT',
                'constraint' => 3,
                'unsigned' => true,
                'null' => true,
                'default' => null
            ),
            'data_id12' => array(
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => true,
                'default' => null
            ),
            'data_id16' => array(
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'default' => null
            ),
            'data_id18' => array(
                'type' => 'VARCHAR',
                'constraint' => 18,
                'null' => true,
                'default' => null
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');
        $this->forge->addKey('logstamp', false, false, 'TIMESTAMP');
        $this->forge->addKey('id_user', false, false, 'USER');
        $this->forge->addKey('id_tipe', false, false, 'TIPE');
        $this->forge->addKey('data_id12', false, false, 'ID12');
        $this->forge->addKey('data_id16', false, false, 'ID16');
        $this->forge->addKey('data_id18', false, false, 'ID18');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('user_log', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('user_log', true);
    }
}
