<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'cant_ut' => fake()->numberBetween(1, 100),
            'img' => fake()->text, 
            'tipo' => 'fisico',
        ];
    }
}