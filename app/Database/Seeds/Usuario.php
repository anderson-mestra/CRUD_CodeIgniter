<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $contrasena = password_hash('hola', PASSWORD_DEFAULT);

        $data = [
            'usuario' => 'admin',
            'contrasena' => $contrasena,
            'tipo' => 'admin'
        ];

        // Using Query Builder
        $this->db->table('login')->insert($data);
    }
}
