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

        $roleRegis = new Role();
        $roleRegis->rol = 'Registro';
        $roleRegis->descripcion = 'Este rol se encarga de aceptar los timbres fiscales y validarlos';
        $roleRegis->save();
    }
}
