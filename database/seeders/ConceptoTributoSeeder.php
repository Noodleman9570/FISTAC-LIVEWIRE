<?php

namespace Database\Seeders;

use App\Models\ConceptoTributo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConceptoTributoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConceptoTributo::factory(20)->create();
    }
}
