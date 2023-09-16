<?php

namespace Database\Factories;

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
            'codigo'=>$this->faker->languageCode,
            'nombre'=> $this->faker->name,
            'credito'=>$this->faker->numberBetween(1, 10),
            'requisito'=>$this->faker->numberBetween(1, 999),

        ];
    }
}
