<?php

use App\Http\Controllers\DenomTimbresController;
use App\Livewire\Contador;
use Illuminate\Support\Facades\Route;
use App\Livewire\CreatePost;
use App\Livewire\Dashboard;
use App\Livewire\Formulario;
use App\Livewire\TableComponent;

//Modulos del sistema
use App\Http\Controllers\TimbresFiscalesController;
use App\Http\Controllers\AsigTimElecController;
use App\Http\Controllers\GenTimFisController;
use App\Http\Controllers\AsigTimFisController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ControlTimbreController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\ContribuyenteController;
use App\Http\Controllers\LeyController;


use App\Models\Contribuyente;

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

// Rutas de los modulos
Route::resource('TimbresFiscales', TimbresFiscalesController::class);
Route::resource('AsigTimElec', AsigTimElecController::class);
Route::resource('AsigTimFis', AsigTimFisController::class);
Route::resource('GenTimFis', GenTimFisController::class);
Route::resource('User', UserController::class);
Route::resource('Contribuyente', ContribuyenteController::class);
Route::resource('ControlTimbre', ControlTimbreController::class);
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
