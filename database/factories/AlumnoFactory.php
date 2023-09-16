<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->name,
            'edad'=>$this->faker->numberBetween(1, 100),
            'grado'=>$this->faker->languageCode(1, 25),
            'promedio'=>$this->faker->randomNumber(1, 99),
            'direccion'=>$this->faker->address,
            'telefono'=>$this->faker->phoneNumber,
            'correo'=>$this->faker->email,
            //'sede_codigo'=>$this->faker->unique()->numberBetween(1,10),
        ];
    }
}
