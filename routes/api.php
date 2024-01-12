<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContribuyenteController;
use App\Http\Controllers\TimbreFiscalController;
use App\Http\Controllers\DenomTimbresController;
use App\Http\Controllers\EnteTramiteController;
use App\Http\Controllers\TramiteController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=> 'v1'],function(){
    Route::apiResource('timbreFiscal', TimbreFiscalController::class);
    Route::apiResource('denomTimbres', DenomTimbresController::class);
    Route::apiResource('enteTramite', EnteTramiteController::class);
    Route::apiResource('tramite', TramiteController::class);
    Route::apiResource('contribuyente', ContribuyenteController::class);


});
