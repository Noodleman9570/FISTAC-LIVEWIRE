<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class TimbreElectronicoPrintController extends Controller
{
    public function index()
    {
        $ruta = route('ReportTimElec');
        $imgPath = asset('public/img');
        Browsershot::url("$ruta")->save('img.pdf');
        return view('TimbreElectronico.index');
    }
}
