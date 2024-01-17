<?php

namespace App\Http\Controllers;


use App\Http\Resources\TimbreFiscalCollection;
use App\Models\TimbreFiscal;

use Illuminate\Http\Request;

class TimbreFiscalApiController extends Controller
{
    public function index(){
        $timbreFiscal = TimbreFiscal::all();
        return new TimbreFiscalCollection($timbreFiscal);
    }
}
