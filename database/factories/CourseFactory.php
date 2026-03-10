<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Genera una clave única tipo KIT-1234
            'course_key' => fake()->unique()->bothify('KIT-####'),
            
            // Genera un nombre de curso (reemplaza a 'title')
            'nombre'     => fake()->sentence(3),
            
            // Una imagen de relleno para la portada
            'portada'    => 'default.jpg',
            
            // Genera el texto largo (reemplaza a 'content')
            'contenido'  => fake()->paragraph(5),
            
            // Vincula el curso al grupo con ID 1 (el que creamos en el seeder)
            'group_id'   => 1,
        ];
    }
}