<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    protected $fillable = ['nombre'];

    // Relación: Un grupo tiene muchos usuarios (alumnos/profes)
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    // Relación: Un grupo tiene muchos cursos asignados
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
