<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory; // <--- AGREGAR ESTO

class Course extends Model
{
    use HasFactory; // <--- AGREGAR ESTO

    // Ajustado a los nombres de tus columnas reales
    protected $fillable = ['course_key', 'nombre', 'portada', 'contenido', 'group_id'];

    // Relación: El curso pertenece a un grupo
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    // Relación: Un curso tiene muchos materiales (kits)
    public function materials(): HasMany
    {
        return $this->hasMany(Material::class);
    }
}