<?php

namespace Database\Seeders;



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Permiso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // $this->call(ContribuyenteSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PuntosSeeder::class);
        $this->call(ModuloSeeder::class);
        $this->call(PermisoSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(ConceptoTributoSeeder::class);
        $this->call(EnteTramiteSeeder::class);
        // $this->call(TramiteSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DenomTimbreSeeder::class);
        // $this->call(TimbreFiscalSeeder::class);
    }
}
