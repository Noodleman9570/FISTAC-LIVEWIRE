<?php

namespace Database\Seeders;

use App\Models\Permiso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //Permisos del administrador
            //Modulo Asignacion de timbre electronico
            $perAdmin = New Permiso();
            $perAdmin->rol_id = 1;
            $perAdmin->modulo_id = 1;
            $perAdmin->create = 1;
            $perAdmin->read = 1;
            $perAdmin->update = 1;
            $perAdmin->delete = 1;
            $perAdmin->save();

            //Modulo Generacion timbre fisico
            $perAdmin = New Permiso();
            $perAdmin->rol_id = 1;
            $perAdmin->modulo_id = 2;
            $perAdmin->create = 1;
            $perAdmin->read = 1;
            $perAdmin->update = 1;
            $perAdmin->delete = 1;
            $perAdmin->save();

            //Modulo Asignacion timbre fisico
            $perAdmin = New Permiso();
            $perAdmin->rol_id = 1;
            $perAdmin->modulo_id = 3;
            $perAdmin->create = 1;
            $perAdmin->read = 1;
            $perAdmin->update = 1;
            $perAdmin->delete = 1;
            $perAdmin->save();

            //Modulo Agregar contribuyente
            $perAdmin = New Permiso();
            $perAdmin->rol_id = 1;
            $perAdmin->modulo_id = 4;
            $perAdmin->create = 1;
            $perAdmin->read = 1;
            $perAdmin->update = 1;
            $perAdmin->delete = 0;
            $perAdmin->save();
            
            //Modulo Agregar usuario
            $perAdmin = New Permiso();
            $perAdmin->rol_id = 1;
            $perAdmin->modulo_id = 5;
            $perAdmin->create = 1;
            $perAdmin->read = 1;
            $perAdmin->update = 1;
            $perAdmin->delete = 1;
            $perAdmin->save();

            //Modulo Control de timbres
            $perAdmin = New Permiso();
            $perAdmin->rol_id = 1;
            $perAdmin->modulo_id = 6;
            $perAdmin->create = 1;
            $perAdmin->read = 1;
            $perAdmin->update = 1;
            $perAdmin->delete = 1;
            $perAdmin->save();

            //Modulo Bitacora
            $perAdmin = New Permiso();
            $perAdmin->rol_id = 1;
            $perAdmin->modulo_id = 7;
            $perAdmin->create = 0;
            $perAdmin->read = 1;
            $perAdmin->update = 0;
            $perAdmin->delete = 0;
            $perAdmin->save();

             //Modulo Ley
            $perAdmin = New Permiso();
            $perAdmin->rol_id = 1;
            $perAdmin->modulo_id = 8;
            $perAdmin->create = 1;
            $perAdmin->read = 1;
            $perAdmin->update = 1;
            $perAdmin->delete = 1;
            $perAdmin->save();

////////////////////////////////////////////////////////////////////

        //Permisos del taquilla
            //Modulo Asignacion de timbre electronico
            $perTaquilla = New Permiso();
            $perTaquilla->rol_id = 2;
            $perTaquilla->modulo_id = 1;
            $perTaquilla->create = 1;
            $perTaquilla->read = 1;
            $perTaquilla->update = 0;
            $perTaquilla->delete = 0;
            $perTaquilla->save();

            //Modulo Generacion timbre fisico
            $perTaquilla = New Permiso();
            $perTaquilla->rol_id = 2;
            $perTaquilla->modulo_id = 2;
            $perTaquilla->create = 0;
            $perTaquilla->read = 1;
            $perTaquilla->update = 0;
            $perTaquilla->delete = 0;
            $perTaquilla->save();

            //Modulo Asignacion timbre fisico
            $perTaquilla = New Permiso();
            $perTaquilla->rol_id = 2;
            $perTaquilla->modulo_id = 3;
            $perTaquilla->create = 1;
            $perTaquilla->read = 1;
            $perTaquilla->update = 1;
            $perTaquilla->delete = 1;
            $perTaquilla->save();

            //Modulo Agregar contribuyente
            $perTaquilla = New Permiso();
            $perTaquilla->rol_id = 2;
            $perTaquilla->modulo_id = 4;
            $perTaquilla->create = 1;
            $perTaquilla->read = 1;
            $perTaquilla->update = 0;
            $perTaquilla->delete = 0;
            $perTaquilla->save();
            
            //Modulo Agregar usuario
            $perTaquilla = New Permiso();
            $perTaquilla->rol_id = 2;
            $perTaquilla->modulo_id = 5;
            $perTaquilla->create = 0;
            $perTaquilla->read = 0;
            $perTaquilla->update = 0;
            $perTaquilla->delete = 0;
            $perTaquilla->save();

            //Modulo Control de timbres
            $perTaquilla = New Permiso();
            $perTaquilla->rol_id = 2;
            $perTaquilla->modulo_id = 6;
            $perTaquilla->create = 0;
            $perTaquilla->read = 1;
            $perTaquilla->update = 0;
            $perTaquilla->delete = 0;
            $perTaquilla->save();

            //Modulo Bitacora
            $perTaquilla = New Permiso();
            $perTaquilla->rol_id = 2;
            $perTaquilla->modulo_id = 7;
            $perTaquilla->create = 0;
            $perTaquilla->read = 0;
            $perTaquilla->update = 0;
            $perTaquilla->delete = 0;
            $perTaquilla->save();

             //Modulo Ley
            $perTaquilla = New Permiso();
            $perTaquilla->rol_id = 2;
            $perTaquilla->modulo_id = 8;
            $perTaquilla->create = 0;
            $perTaquilla->read = 1;
            $perTaquilla->update = 0;
            $perTaquilla->delete = 0;
            $perTaquilla->save();

        //Posibles roles gestion de humanitos, auditor 

    }
}
