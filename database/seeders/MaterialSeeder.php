<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Registro de los tres kits de prueba proporcionados por el cliente
        $kits = [
            [
                'name' => 'Starter Kit',
                'description' => 'Kit básico ideal para principiantes en robótica.',
            ],
            [
                'name' => 'Educational Kit',
                'description' => 'Kit intermedio diseñado para entornos escolares y aprendizaje activo.',
            ],
            [
                'name' => 'Pro Kit',
                'description' => 'Kit avanzado con sensores y componentes para proyectos complejos.',
            ],
        ];

        foreach ($kits as $kit) {
            Material::create($kit);
        }
    }
}