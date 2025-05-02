<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'error' => 'Credenciais inválidas'
            ], 401);
        }

        if (!$user->is_admin) {
            return response()->json([
                'error' => 'Acesso não autorizado'
            ], 403);
        }

        // Cria token com Sanctum
        $token = $user->createToken('admin-token')->plainTextToken;

        return response()->json([
            'message' => 'Login realizado com sucesso',
            'token'   => $token,
            'user'    => $user
        ]);
    }

    public function dashboard(Request $request)
    {
        $user = $request->user();

        if (!$user || !$user->is_admin) {
            return response()->json(['error' => 'Não autorizado'], 403);
        }

        return response()->json([
            'message' => 'Bem-vindo ao painel do administrador',
            'user' => $user
        ]);
    }
}