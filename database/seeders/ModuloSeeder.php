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
        $modAsigTimElec->modulo = "Asignación Timbre Electrónico";
        $modAsigTimElec->icon = "bi bi-file-break";
        $modAsigTimElec->ruta = "AsigTimElec.index";
        $modAsigTimElec->descripcion = "Módulo para Generar y Asignar Timbres Electrónico en Taquilla";
        $modAsigTimElec->save();

        $modGenTimFis = new Modulo;
        $modGenTimFis->modulo = "Generacion Timbres Fisicos";
        $modGenTimFis->ruta = "GenTimFis.index";
        $modGenTimFis->icon ="bi bi-file-plus";
        $modGenTimFis->descripcion = "Módulo para Generar Timbres Físicos";
        $modGenTimFis->save();

        $modAsigTimFis = new Modulo;
        $modAsigTimFis->modulo = "Asignacion Timbres Físicos";
        $modAsigTimFis->ruta = "AsigTimFis.index";
        $modAsigTimFis->icon ="bi bi-file-earmark-medical";
        $modAsigTimFis->descripcion = "Módulo para Asignar Timbres Físicos";
        $modAsigTimFis->save();

        $aggContrib = new Modulo;
        $aggContrib->modulo = "Contribuyente";
        $aggContrib->ruta = "Contribuyente.index";
        $aggContrib->icon ="bi bi-person-add";
        $aggContrib->descripcion = "Módulo para Agregar nuevos Contribuyente";
        $aggContrib->save();

        $aggUser = new Modulo;
        $aggUser->modulo = "Usuario";
        $aggUser->ruta = "User.index";
        $aggUser->icon ="bi bi-person-plus-fill";
        $aggUser->descripcion = "Módulo para Agregar nuevos Usuarios";
        $aggUser->save();

        $controlTim = new Modulo;
        $controlTim->modulo = "Control de timbres";
        $controlTim->ruta = "ControlTimbre.index";
        $controlTim->icon ="bi bi-file-earmark-spreadsheet";
        $controlTim->descripcion = "Módulo para Llevar el control de los timbres fiscales y realizar reportes";
        $controlTim->save();

        $bitacora = new Modulo;
        $bitacora->modulo = "Bitácora";
        $bitacora->ruta = "Bitacora.index";
        $bitacora->icon ="bi bi-person-rolodex";
        $bitacora->descripcion = "Bitácora de acciones de cada modulo y cada acción";
        $bitacora->save();

        $ley = new Modulo;
        $ley->modulo = "Ley";
        $ley->ruta = "Ley.index";
        $ley->icon ="bi bi-book";
        $ley->descripcion = "Pdf de ley";
        $ley->save();


    }
}
