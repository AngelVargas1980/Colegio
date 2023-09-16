<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personas>
 */
class PersonasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=> $this->faker->name,
            'edad'=> $this->faker->numberBetween(1, 99),
            'materia'=> $this->faker->userName(),
            'anos_experiencia'=> $this->faker->numberBetween(1, 60),
            'curso_codigo'=> $this->faker->languageCode(1,5
            ),
        ];
    }
}
