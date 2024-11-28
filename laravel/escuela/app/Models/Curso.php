<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = "cursos";
    protected $primaryKey = "id";
    protected $fillable = ['nombre', 'nivel', 'horasAcademicas', 'profesor_id'];

    // Relación con Profesor
    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'profesor_id');
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'alumno_curso', 'curso_id', 'alumno_id');
    }
}