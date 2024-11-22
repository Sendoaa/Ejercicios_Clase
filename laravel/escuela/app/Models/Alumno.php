<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumno extends Model
{
    use HasFactory; // Esta línea es importante
    protected $table = "alumnos";
    protected $primaryKey = "id";
    protected $fillable = ['nombre_ape', 'edad', 'telefono', 'dirección'];
    protected $hidden = ['id'];

    public function obtenerAlumnos(){
        return Alumno::all();
       }

       public function obtenerAlumnoPorId($id){
        return Alumno::find($id);
     }
}