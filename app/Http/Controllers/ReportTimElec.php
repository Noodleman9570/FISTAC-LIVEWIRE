<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportTimElec extends Controller
{



    public function index(request $request){

        $idtimbre = $request->id;

        $timbre = DB::table('tramites')
            ->join('timbres_fiscales', 'tramites.id', '=', 'timbres_fiscales.tramite_id')
            ->join('contribuyentes', 'tramites.contribuyente_id', '=', 'contribuyentes.id')
            ->join('ente_tramites', 'tramites.ente_tramite_id', '=', 'ente_tramites.id')
            ->select('tramites.*', 'timbres_fiscales.id', 'timbres_fiscales.cod_qr', 'contribuyente.cedula', 'contribuyente.nombre', 'contribuyente.apellido', 'ente_tramites.total_ut', 'orders.price')
            ->get();
        

        view('ReportTimElec.index', compact('timbre'));
    }
}
