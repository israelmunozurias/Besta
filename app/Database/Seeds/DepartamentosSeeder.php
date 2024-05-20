<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nombre' => 'Recursos Humanos',
                'descripcion' => 'Descripción de Recursos Humanos'
            ],
            [
                'nombre' => 'Informatica',
                'descripcion' => 'Descripción de Informatica'
            ], 
        ];
        $this->db->table('departamentos')->insertBatch($data);
    }
}
