<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombreApellido' => $this->faker->name(),
            'profesion' => $this->faker->jobTitle(),
            'gradoAcademico' => $this->faker->randomElement(['Matemáticas', 'Física', 'Química', 'Biología']),
            'telefono' => $this->faker->phoneNumber(),
        ];
    }
}
