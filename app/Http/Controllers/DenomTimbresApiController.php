<?php

namespace App\Http\Controllers;

use App\Http\Resources\DenomTimbresCollection;
use App\Models\DenomTimbre;
use Illuminate\Http\Request;

class DenomTimbresApiController extends Controller
{
    public function index(){
        $denomTimbre = DenomTimbre::all();
        return new DenomTimbresCollection ($denomTimbre);
    }
}
