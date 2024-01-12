<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleAdmin = new Role();
        $roleAdmin->rol = 'Admin';
        $roleAdmin->descripcion = 'Este rol tiene todos los permisos';
        $roleAdmin->save();

        $roleTaq = new Role();
        $roleTaq->rol = 'Taquilla';
        $roleTaq->descripcion = 'Este rol genera y asigna timbres fiscales';
        $roleTaq->save();

        $roleImpr = new Role();
        $roleImpr->rol = 'Impresion';
        $roleImpr->descripcion = 'Este rol genera timbres fiscales fisicos para ser impresos';
        $roleImpr->save();
    }
}
