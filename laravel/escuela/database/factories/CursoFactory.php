<?php

namespace Database\Factories;

use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'nivel' => $this->faker->numberBetween(1, 10),
            'horasAcademicas' => $this->faker->numberBetween(10, 100),
            'profesor_id' => Profesor::factory(),
        ];
    }
}
