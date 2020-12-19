<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Unidades extends Migration
{

    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id_unidad'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'unidad' => [
                'type'           => 'VARCHAR',
                'constraint'     => '30',
            ],
            'simbolo' => [
                'type'           => 'VARCHAR',
                'constraint'     => '5',
            ],
        ]);
        $this->forge->addKey('id_unidad', true);
        $this->forge->createTable('unidades');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('unidades');
    }
}