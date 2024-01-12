<?php

use App\Http\Controllers\DenomTimbresController;
use App\Livewire\Contador;
use Illuminate\Support\Facades\Route;
use App\Livewire\CreatePost;
use App\Livewire\Dashboard;
use App\Livewire\Formulario;
use App\Livewire\TableComponent;

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

Route::resource('denomTimbres', DenomTimbresController::class);


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('/prueba', 'prueba')->name('prueba');

require __DIR__.'/auth.php';
