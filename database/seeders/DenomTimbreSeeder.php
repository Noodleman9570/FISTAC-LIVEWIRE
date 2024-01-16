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
        DenomTimbre::factory(20)->create();
    }
}
