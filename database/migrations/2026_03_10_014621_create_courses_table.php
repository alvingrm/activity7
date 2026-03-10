<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // PK
            $table->string('course_key')->unique(); // Ej: Rob101 (De la tabla de Excel)
            $table->string('nombre'); // Nombre de la materia
            $table->string('portada')->nullable(); // Para la imagen de portada
            $table->text('contenido'); // Para el contenido del curso
            
            // Llave Foránea: Un curso se asigna a un grupo
            $table->foreignId('group_id')->constrained('groups')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
