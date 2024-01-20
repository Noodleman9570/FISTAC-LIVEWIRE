<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimbreFiscalApiController;
use App\Http\Controllers\DenomTimbresApiController;
use App\Http\Controllers\EnteTramiteApiController;
use App\Http\Controllers\TramiteApiController;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\ContribuyenteApiController;


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

// Laravel
Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Autenticación exitosa, generar y devolver token
        $token = Str::random(60);
        $request->user()->forceFill([
            'api_token' => hash('sha256', $token),
        ])->save();

        return ['token' => $token];
    }

    // Autenticación fallida
    return response()->json(['error' => 'Unauthenticated.'], 401);
});


Route::group(['prefix'=> 'v1'],function(){
    Route::apiResource('timbreFiscal', TimbreFiscalApiController::class);
    Route::apiResource('denomTimbres', DenomTimbresApiController::class);
    Route::apiResource('enteTramite', EnteTramiteApiController::class);
    Route::apiResource('tramite', TramiteApiController::class);
    Route::apiResource('user', UserApiController::class);
    Route::apiResource('contribuyente', ContribuyenteApiController::class);
});
