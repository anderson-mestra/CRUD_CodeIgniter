<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class librosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nombre' => 'Dark',
            'decripcion'    => 'Very dark',
        ];

 
        // Using Query Builder
        $this->db->table('libro')->insert($data);
    }
}