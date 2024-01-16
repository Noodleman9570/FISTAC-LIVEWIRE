<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EnteTramiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $faker->word,
            'descripcion' => $faker->text,
            'total_ut' => $faker->numberBetween(1, 1000),
            'concepto_tributo_id' => null,
        ];
    }
}
