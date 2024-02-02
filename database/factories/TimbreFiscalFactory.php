<?php

namespace Database\Factories;
use App\Models\DenomTimbre;
use App\Models\Tramite;
use App\Helpers\Helpers;
use Illuminate\Support\Str;

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
        $date = date('h:m:s');
        $date = str_replace(':', '', $date);
        return [
            'codigo' => 'EL-'.Helpers::generarCodigo(6).$date,
            'status' => 'asignado',
            'denominacion_id' => DenomTimbre::factory(),
            'tramite_id' => Tramite::factory(),
        ];
    }
}
