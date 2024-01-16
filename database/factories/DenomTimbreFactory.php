<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DenomTimbre>
 */
class DenomTimbreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cant_ut' => $faker->numberBetween(1, 100),
            'img' => $faker->text, 
            'tipo' => $faker->randomElement(['fisico', 'electronico']),
        ];
    }
}