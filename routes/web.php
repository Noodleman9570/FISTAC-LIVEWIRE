<?php

use App\Http\Controllers\DenomTimbresController;
use App\Livewire\Contador;
use Illuminate\Support\Facades\Route;
use App\Livewire\CreatePost;
use App\Livewire\Dashboard;
use App\Livewire\Formulario;
use App\Livewire\TableComponent;

//Modulos del sistema

use App\Http\Controllers\AsigTimElecController;
use App\Http\Controllers\GenTimFisController;
use App\Http\Controllers\AsigTimFisController;
use App\Http\Controllers\AggContribController;
use App\Http\Controllers\AggUsuarioController;
use App\Http\Controllers\ContrTimController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\LeyController;


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

Route::view('/', 'welcome');

Route::resource('AsigTimElec', AsigTimElecController::class);
Route::resource('GenTimFis', GenTimFisController::class);
Route::resource('AsigTimFis', AsigTimFisController::class);
Route::resource('AggContrib', AggContribController::class);
Route::resource('AggUsuario', AggUsuarioController::class);
Route::resource('ContrTim', ContrTimController::class);
Route::resource('Bitacora', BitacoraController::class);
Route::resource('Ley', LeyController::class);


// Route::resource('denomTimbres', DenomTimbresController::class);


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('/prueba', 'prueba')->name('prueba');

require __DIR__.'/auth.php';
