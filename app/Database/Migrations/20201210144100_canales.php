<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Canales extends Migration
{

    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id_canal'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre_canal'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'id_proyecto' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'id_unidad' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'estado' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
        ]);
        $this->forge->addKey('id_canal', true);
        $this->forge->createTable('canales');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('canales');
    }
}