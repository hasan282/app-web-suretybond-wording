<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MarketingRate extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'id_marketing' => array(
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => true,
                'default' => null
            ),
            'id_asuransi' => array(
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => true,
                'default' => null
            ),
            'id_jenis' => array(
                'type' => 'SMALLINT',
                'constraint' => 3,
                'unsigned' => true,
                'null' => true,
                'default' => null
            ),
            'id_proyek' => array(
                'type' => 'SMALLINT',
                'constraint' => 3,
                'unsigned' => true,
                'null' => true,
                'default' => null
            ),
            'rate_percent' => array(
                'type' => 'DECIMAL',
                'constraint' => '7,6',
                'null' => true,
                'default' => null
            ),
            'minimum' => array(
                'type' => 'DECIMAL',
                'constraint' => '15,2',
                'null' => true,
                'default' => null
            ),
            'admin_fee' => array(
                'type' => 'DECIMAL',
                'constraint' => '15,2',
                'null' => true,
                'default' => null
            )
        ));

        $this->forge->addPrimaryKey('id', 'PRIMARY');
        $this->forge->addKey('id_marketing', false, false, 'MARKETING');
        $this->forge->addKey('id_asuransi', false, false, 'ASURANSI');
        $this->forge->addKey('id_jenis', false, false, 'JENIS');
        $this->forge->addKey('id_proyek', false, false, 'PROYEK');

        $attribute = array('ENGINE' => 'InnoDB');
        $this->forge->createTable('marketing_rate', true, $attribute);
    }

    public function down()
    {
        $this->forge->dropTable('marketing_rate', true);
    }
}
