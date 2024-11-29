<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Profesor;
// use Illuminate\Database\Console\Seeds\With
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Alumno::factory(count: 50)->create();
        Profesor::factory(count:50)->create();
        Curso::factory(count:50)->create();

        // Attach random courses to each student
        Alumno::all()->each(function ($alumno) {
            $cursos = Curso::inRandomOrder()->take(rand(1, 5))->pluck('id');
            $alumno->cursos()->attach($cursos);
        });

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
