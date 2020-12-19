<?php //namespace App\Database\Migrations;
//
//use CodeIgniter\Database\Migration;
//
//class InitialSchema extends Migration
//{
//
//    public function up()
//    {
//        $this->forge->addField([
//            'id_canal'          => [
//                'type'           => 'INT',
//                'constraint'     => 11,
//                'unsigned'       => true,
//                'auto_increment' => true,
//            ],
//            'nombre_canal'       => [
//                'type'           => 'VARCHAR',
//                'constraint'     => '100',
//            ],
//            'id_proyecto' => [
//                'type'           => 'INT',
//                'constraint'     => 11,
//            ],
//            'id_unidad' => [
//                'type'           => 'INT',
//                'constraint'     => 11,
//            ],
//            'estado' => [
//                'type'           => 'INT',
//                'constraint'     => 11,
//            ],
//        ]);
//        $this->forge->addKey('id_canal', true);
//        $this->forge->createTable('canales');
//
//        $this->forge->addField([
//            'id_dato'          => [
//                'type'           => 'INT',
//                'constraint'     => 11,
//                'unsigned'       => true,
//                'auto_increment' => true,
//            ],
//            'fecha' => [
//                'type'           => 'DATETIME',
//            ],
//            'id_canal' => [
//                'type'           => 'INT',
//                'constraint'     => 11,
//            ],
//            'valor' => [
//                'type'           => 'DOUBLE',
//                'constraint'     => '11,6',
//            ],
//            'estado' => [
//                'type'           => 'INT',
//                'constraint'     => 11,
//            ],
//        ]);
//        $this->forge->addKey('id_dato', true);
//        $this->forge->createTable('datos');
//    }
//
//    public function down()
//    {
//        $this->forge->dropTable('canales');
//        $this->forge->dropTable('datos');
//    }
//}