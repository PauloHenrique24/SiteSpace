<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

Route::post('/auth',[Auth::class, 'auth']);
Route::get('/auth/verify',[Auth::class, 'verify']);
