<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContribuyenteCollection;
use App\Models\Contribuyente;
use Illuminate\Http\Request;

class ContribuyenteApiController extends Controller
{
    public function index(){
        $contribuyente = Contribuyente::all();
        return new ContribuyenteCollection ($contribuyente);
    }
}
