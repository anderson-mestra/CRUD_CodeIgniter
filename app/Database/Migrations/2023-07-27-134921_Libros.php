<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Libro extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idLibro' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'decripcion' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('idLibro', true); //Primary key
        $this->forge->createTable('Libro');
    }

    public function down()
    {
        $this->forge->dropTable('Libro');
    }
}
