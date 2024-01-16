<?php

namespace Database\Factories;
use App\Models\DenomTimbre;
use App\Models\Tramite;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TimbreFiscalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => $faker->randomElement(['generado', 'asignado', 'anulado', 'empleado']),
            'denominacion_id' => DenomTimbre::factory(),
            'tramite_id' => Tramite::factory(),
        ];
    }
}
