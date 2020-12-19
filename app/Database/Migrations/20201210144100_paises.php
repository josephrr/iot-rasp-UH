<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Paises extends Migration
{

    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id_pais'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'iso' => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ],
            'pais' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
        ]);
        $this->forge->addKey('id_pais', true);
        $this->forge->createTable('paises');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('paises');
    }
}