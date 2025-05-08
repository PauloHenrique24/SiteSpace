<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Custom\Jwt;

class Auth extends Controller
{
    public function auth(Request $request){
        $user = User::where('email', $request->email)->first();

        if(!$user){
            return response()->json('usuario nao encontrado', 401);
        }

        // response()->json($user->password);

        if(!password_verify($request->password,$user->password)){
            return response()->json('not authorized', 401);
        }

        $token = Jwt::create($user);

        return response()->json([
            'token' => $token,
            'user' => [
                'firstName' => $user->firstName,
                'lastName' => $user->lastName,
                'email' => $user->email,
                'admin' => $user->administrador,
            ]
        ]);
    }

    public function verify(){
        return Jwt::validate();
    }

    public function admins(){
        return User::where('administrador');
    }
}
