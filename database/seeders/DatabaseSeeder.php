<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Creamos el grupo base (necesario para los usuarios)
        Group::create(['name' => 'General Group']);

        // 2. Ejecutamos los seeders manuales (Usuarios y Materiales)
        $this->call([
            UserSeeder::class,
            MaterialSeeder::class,
        ]);

        // 3. Generamos los 100 cursos usando el Factory
        // Esto creará 100 registros con nombres y claves aleatorias
        Course::factory(100)->create();
    }
}