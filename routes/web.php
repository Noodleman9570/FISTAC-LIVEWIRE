<?php

use App\Http\Controllers\DenomTimbresController;
use Illuminate\Support\Facades\Route;
use App\Livewire\CreatePost;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    // $pdf = App::make('dompdf.wrapper');
    // $pdf = app('dompdf.wrapper');

    // $path = storage_path('app/views/pdf.html');
    // $pdf=Pdf::setProtocol("file://"); //Protocolo para windows
    $pdf = PDF::loadView('pdf.pdf');

    // $pdf->loadHTML('<h1>Hola pdf</h1>');
    return $pdf->stream();
});

Route::resource('denomTimbres', DenomTimbresController::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
