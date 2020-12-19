<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Proyectos extends Migration
{

    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id_proyecto'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'fecha date not null',
            'nombre' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'descripcion' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'     => true,
            ],
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'token' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'estado' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
        ]);
        $this->forge->addKey('id_proyecto', true);
        $this->forge->createTable('proyectos');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('proyectos');
    }
}