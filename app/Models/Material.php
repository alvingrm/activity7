<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Material extends Model
{
    /**
     * Los atributos que se pueden asignar de forma masiva.
     */
    protected $fillable = [
        'nombre',    // Nombre del kit (StarterKit, etc.)
        'course_id', // Relación con el curso
    ];

    /**
     * Relación: El material pertenece a un curso (Muchos a 1).
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}