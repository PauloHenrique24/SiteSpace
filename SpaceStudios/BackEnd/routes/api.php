<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Register;

Route::post('/auth',[Auth::class, 'auth']);
Route::get('/auth/verify',[Auth::class, 'verify']);

Route::post('/register', [Register::class, 'register']);
Route::get('/dashboard/admins', [Auth::class, 'admins']);
