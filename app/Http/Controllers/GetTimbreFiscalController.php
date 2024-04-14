<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimbreFiscal;
use Illuminate\Support\Facades\DB;


class GetTimbreFiscalController extends Controller
{
    public function index(Request $req)
    {
        $timbre = DB::table('timbres_fiscales')
            ->join('tramites', 'timbres_fiscales.tramite_id', 'tramites.id')
            ->join('contribuyentes', 'tramites.contribuyente_id', 'contribuyentes.id')
            ->join('ente_tramites', 'tramites.ente_tramite_id', 'ente_tramites.id')
            ->where('timbres_fiscales.codigo', $req->codigo)
            ->select('timbres_fiscales.*', 'contribuyentes.*', 'ente_tramites.nombre as nom_ente', 'ente_tramites.descripcion as desc_ente', 'ente_tramites.total_ut')
            ->get()->collect();

        return $timbre; 
    }

    public function updateStatus(Request $request, $codigo)
    {
        // Busca el primer TimbreFiscal donde el campo 'codigo' coincide con el $codigo proporcionado
        $timbre = TimbreFiscal::where('codigo', $codigo)->first();

        // Si no se encuentra el timbre, devuelve un error 404
        if (!$timbre) {
            return response()->json(['message' => 'Timbre no encontrado'], 404);
        }

        // Actualiza el estado del timbre a 'empleado' o al estado proporcionado en la solicitud
        $timbre->status = $request->get('status', 'empleado');
        $timbre->save(); // Guarda los cambios en la base de datos

        // Devuelve un mensaje de éxito
        return response()->json(['message' => 'Estado actualizado con éxito']);
    }

    public function getTimbre()
    {
       // Busca todos los TimbreFiscal donde el campo 'status' es 'empleado'
        $timbres = TimbreFiscal::where('status', 'empleado')->get();

        // Si no se encuentran timbres, devuelve un error 404
        if ($timbres->isEmpty()) {
            return response()->json(['message' => 'No se encontraron timbres con estado empleado'], 404);
        }

        // Devuelve los timbres encontrados
        return response()->json(['message' => 'Timbres encontrados con éxito', 'data' => $timbres]);
    }

}
