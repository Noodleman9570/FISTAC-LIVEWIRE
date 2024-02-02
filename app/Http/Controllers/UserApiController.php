<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Models\User;

use Illuminate\Http\Request;

class UserApiController extends Controller
{
    
    public function index(Request $request)
    {
        $token = $request->query('api_token');
        $user = User::where('api_token', $token)->first();

        if ($user) {
            return $user;
        } else {
            return response()->json(['error' => 'Usuario no encontrado.'], 404);
        }
    }
}
