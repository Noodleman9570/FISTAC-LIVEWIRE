<?php

namespace Database\Factories;
use App\Models\Contribuyente;
use App\Models\EnteTramite;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TramiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion' => $faker->text,
            'contribuyente_id' => Contribuyente::factory(),
            'ente_tramite_id' => EnteTramite::factory()
        ];
    }
}
