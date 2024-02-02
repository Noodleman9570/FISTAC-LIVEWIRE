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
            ->get();
            
        return $timbre; 
    }
}
