<?php

namespace Database\Seeders;

use App\Models\Modulo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Modulo de Asignacion de Timbres Electronicos
        $modAsigTimElec = new Modulo;
        $modAsigTimElec->modulo = "Asignación de Timbre Electrónico";
        $modAsigTimElec->ruta = "asigTimElec";
        $modAsigTimElec->descripcion = "Módulo para Generar y Asignar Timbres Electrónico en Taquilla";
        $modAsigTimElec->save();

        $modGenTimFis = new Modulo;
        $modGenTimFis->modulo = "Generacion de Timbres Fisicos";
        $modGenTimFis->ruta = "genTimFis";
        $modGenTimFis->descripcion = "Módulo para Generar Timbres Físicos";
        $modGenTimFis->save();

        $modAsigTimFis = new Modulo;
        $modAsigTimFis->modulo = "Asignacion de Timbres Físicos";
        $modAsigTimFis->ruta = "asigTimFis";
        $modAsigTimFis->descripcion = "Módulo para Asignar Timbres Físicos";
        $modAsigTimFis->save();

        $aggContrib = new Modulo;
        $aggContrib->modulo = "Agregar Contribuyente";
        $aggContrib->ruta = "aggContrib";
        $aggContrib->descripcion = "Módulo para Agregar nuevos Contribuyente";
        $aggContrib->save();

        $aggUser = new Modulo;
        $aggUser->modulo = "Agregar Usuario";
        $aggUser->ruta = "aggUsuario";
        $aggUser->descripcion = "Módulo para Agregar nuevos Usuarios";
        $aggUser->save();

        $controlTim = new Modulo;
        $controlTim->modulo = "Control de timbres";
        $controlTim->ruta = "contrTim";
        $controlTim->descripcion = "Módulo para Llevar el control de los timbres fiscales y realizar reportes";
        $controlTim->save();

        $bitacora = new Modulo;
        $bitacora->modulo = "Bitácora";
        $bitacora->ruta = "bitacora";
        $bitacora->descripcion = "Bitácora de acciones de cada modulo y cada acción";
        $bitacora->save();

        $ley = new Modulo;
        $ley->modulo = "Ley";
        $ley->ruta = "ley";
        $ley->descripcion = "Pdf de ley";
        $ley->save();


    }
}
