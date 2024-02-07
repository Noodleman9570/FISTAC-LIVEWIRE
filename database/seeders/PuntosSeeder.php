<?php

namespace Database\Seeders;

use App\Models\Punto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PuntosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $punto = new Punto();
        $punto->nombre = 'Sedebat';
        $punto->direccion = 'Av. las pilas';
        $punto->save();

        $punto = new Punto();
        $punto->nombre = 'Gobernación';
        $punto->direccion = 'Centro, plaza sucre';
        $punto->save();

        $punto = new Punto();
        $punto->nombre = 'Zona educativa';
        $punto->direccion = '5ta Av';
        $punto->save();
    }
}
