<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if(!auth::check()){
            return response()->json(['msg'=>'nao autorizado'],401);
        }

        if(!auth::user()->is_admin){
            return response()->json(['msg' => 'Acesso negado, apenas administradorese'],403);
        }

        return $next(response);
    }
}
