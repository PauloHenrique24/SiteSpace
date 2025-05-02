<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AdminController;

Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/{id}', [CursoController::class, 'show']);

Route::post('/admin/login', [AdminController::class, 'login']);

Route::middleware('auth','admin')->group(function () {
    Route::get('/admin/dashboard', [CursoController::class, 'dashboard']);
    Route::post('/admin/cursos', [CursoController::class, 'store']);
    Route::put('/admin/cursos/{id}', [CursoController::class, 'update']);
    Route::delete('/admin/cursos/{id}', [CursoController::class, 'destroy']);
});