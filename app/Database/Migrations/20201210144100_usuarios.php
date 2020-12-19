<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{

    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id_usuario'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'correo' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'pass' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'id_pais' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'estado' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('usuarios');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}