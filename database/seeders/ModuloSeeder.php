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
        $modAsigTimElec->ruta = "AsigTimElec.index";
        $modAsigTimElec->descripcion = "Módulo para Generar y Asignar Timbres Electrónico en Taquilla";
        $modAsigTimElec->save();

        $modGenTimFis = new Modulo;
        $modGenTimFis->modulo = "Generacion de Timbres Fisicos";
        $modGenTimFis->ruta = "GenTimFis.index";
        $modGenTimFis->descripcion = "Módulo para Generar Timbres Físicos";
        $modGenTimFis->save();

        $modAsigTimFis = new Modulo;
        $modAsigTimFis->modulo = "Asignacion de Timbres Físicos";
        $modAsigTimFis->ruta = "AsigTimFis.index";
        $modAsigTimFis->descripcion = "Módulo para Asignar Timbres Físicos";
        $modAsigTimFis->save();

        $aggContrib = new Modulo;
        $aggContrib->modulo = "Agregar Contribuyente";
        $aggContrib->ruta = "AggContrib.index";
        $aggContrib->descripcion = "Módulo para Agregar nuevos Contribuyente";
        $aggContrib->save();

        $aggUser = new Modulo;
        $aggUser->modulo = "Agregar Usuario";
        $aggUser->ruta = "AggUsuario.index";
        $aggUser->descripcion = "Módulo para Agregar nuevos Usuarios";
        $aggUser->save();

        $controlTim = new Modulo;
        $controlTim->modulo = "Control de timbres";
        $controlTim->ruta = "ContrTim.index";
        $controlTim->descripcion = "Módulo para Llevar el control de los timbres fiscales y realizar reportes";
        $controlTim->save();

        $bitacora = new Modulo;
        $bitacora->modulo = "Bitácora";
        $bitacora->ruta = "Bitacora.index";
        $bitacora->descripcion = "Bitácora de acciones de cada modulo y cada acción";
        $bitacora->save();

        $ley = new Modulo;
        $ley->modulo = "Ley";
        $ley->ruta = "Ley.index";
        $ley->descripcion = "Pdf de ley";
        $ley->save();


    }
}
