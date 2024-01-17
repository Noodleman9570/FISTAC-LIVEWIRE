<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Models\User;

use Illuminate\Http\Request;

class UserApiController extends Controller
{
    
    public function index(){
        $user = User::all();
        return new UserCollection($user);
    }
}
