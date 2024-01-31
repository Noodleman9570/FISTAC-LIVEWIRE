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

        $admin = new DenomTimbre();

        $admin->cant_ut = null;
        $admin->img = 'timbre_electronico.jpeg';
        $admin->tipo = 'electronico';

        $admin->save();

        DenomTimbre::factory(20)->create();
    }
}
