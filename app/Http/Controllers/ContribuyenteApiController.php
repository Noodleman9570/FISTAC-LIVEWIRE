<?php

namespace App\Http\Controllers;
use App\Models\Contribuyente;
use Illuminate\Http\Request;

class ContribuyenteApiController extends Controller
{
    public function index(){
        return Contribuyente::all();
    }
}
