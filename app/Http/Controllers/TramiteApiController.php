<?php

namespace App\Http\Controllers;


use App\Http\Resources\TramiteCollection;
use App\Models\Tramite;

use Illuminate\Http\Request;

class TramiteApiController extends Controller
{
    public function index(){
        $tramite = Tramite::all();
        return new TramiteCollection($tramite);
    }
}
