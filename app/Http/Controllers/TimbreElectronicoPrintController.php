<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Spatie\LaravelPdf\Facades\Pdf;


class TimbreElectronicoPrintController extends Controller
{
    public function index()
    {
        return view('PrintTimbreElectronico.index');
    }
}
