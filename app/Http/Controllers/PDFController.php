<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index() 
    {
    	$filename = 'Timbre_Electronico.pdf';

        $logo_sedebat = public_path('img/logo_sedebat.png');
        $logo_gobernacion = public_path('img/Escudo_Estado_Tachira.png');
        $timbre = public_path('img/timbre.jpeg');

        
    	$data = [
    		'title' => 'Hello world!',
            'SEDEBAT' =>    $logo_sedebat,
            'gobernacion' =>    $logo_gobernacion,
            'timbre' =>    $timbre,
            'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum.'
    	];

    	$view = \View::make('\pdf\timbresElectronicos', $data);
        $html = $view->render();
        
        PDF::SetTitle('Timbre Electronico');
        PDF::AddPage();
        PDF::writeHTML($html, true, false, true, false, '');

        PDF::Output('Timbre_Electronico.pdf');
    }
}