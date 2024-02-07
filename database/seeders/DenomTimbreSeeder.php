<?php

namespace Database\Seeders;

use App\Models\DenomTimbre;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;


class DenomTimbreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $denominacion = new DenomTimbre();

        $denominacion->id = 1000;
        $denominacion->cant_ut = null;
        $denominacion->img = 'timbre_electronico.jpeg';
        $denominacion->tipo = 'electronico';

        $denominacion->save();

        $denominacion = new DenomTimbre();

        $denominacion->id = 1;
        $denominacion->cant_ut = 1;
        $denominacion->img = '1_utet.jpeg';
        $denominacion->tipo = 'fisico';

        $denominacion->save();

        $denominacion = new DenomTimbre();

        $denominacion->id = 2;
        $denominacion->cant_ut = 2;
        $denominacion->img = '2_utet.jpeg';
        $denominacion->tipo = 'fisico';

        $denominacion->save();

        $denominacion = new DenomTimbre();

        $denominacion->id = 5;
        $denominacion->cant_ut = 5;
        $denominacion->img = '5_utet.jpeg';
        $denominacion->tipo = 'fisico';

        $denominacion->save();
        
        $denominacion = new DenomTimbre();

        $denominacion->id = 10;
        $denominacion->cant_ut = 10;
        $denominacion->img = '1_utet.jpeg';
        $denominacion->tipo = 'fisico';

        $denominacion->save();

        $denominacion = new DenomTimbre();

        $denominacion->id = 50;
        $denominacion->cant_ut = 50;
        $denominacion->img = '50_utet.jpeg';
        $denominacion->tipo = 'fisico';

        $denominacion->save();


        // DenomTimbre::factory(20)->create();
    }
}
