<?php

namespace Database\Factories;

use App\Models\ConceptoTributo;
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
            'nombre' => fake()->word,
            'descripcion' => fake()->text,
            'total_ut' =>fake()->numberBetween(1, 1000),
            'concepto_tributo_id' => ConceptoTributo::inRandomOrder()->first()->id,
        ];
    }
}
