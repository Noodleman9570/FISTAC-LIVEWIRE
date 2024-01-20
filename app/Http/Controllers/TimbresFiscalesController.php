<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimbresFiscalesController extends Controller
{
    public function index()
    {
        return view('TimbreFiscal.index');
    }
}
