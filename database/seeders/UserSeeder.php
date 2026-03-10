<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Registro de los tres usuarios solicitados
        
        // 1. Usuario Administrativo
        User::create([
            'username' => 'Admon',
            'email'    => 'admon@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role'     => 'Administrative',
            'group_id' => 1, // Esto asume que el Grupo con ID 1 ya existe
        ]);

        // 2. Usuario Profesor
        User::create([
            'username' => 'Tecmilenio',
            'email'    => 'tecmilenio@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role'     => 'Teacher',
            'group_id' => 1,
        ]);

        // 3. Usuario Estudiante
        User::create([
            'username' => 'Student',
            'email'    => 'student@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role'     => 'Student',
            'group_id' => 1,
        ]);
    }
}