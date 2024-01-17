<?php

namespace App\Http\Controllers;

use App\Http\Resources\EnteTramiteCollection;
use App\Models\EnteTramite;
use Illuminate\Http\Request;

class EnteTramiteApiController extends Controller
{
    public function index(){
        $enteTramite = EnteTramite::all();
        return new EnteTramiteCollection ($enteTramite);
    }
}
