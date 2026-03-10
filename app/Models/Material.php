<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar de forma masiva.
     */
    protected $fillable = [
        'name',         // Cambiado de 'nombre' a 'name'
        'description',  // Añadido para que permita guardar la descripción del kit
        'course_id',    // Relación con el curso
    ];

    /**
     * Relación: El material pertenece a un curso (Muchos a 1).
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}