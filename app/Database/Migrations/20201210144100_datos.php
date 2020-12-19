<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Datos extends Migration
{

    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id_dato'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'fecha datetime not null',
            'id_canal' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'valor' => [
                'type'           => 'DOUBLE',
                'constraint'     => '11,6',
            ],
            'estado' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
        ]);
        $this->forge->addKey('id_dato', true);
        $this->forge->createTable('datos');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('datos');
    }
}