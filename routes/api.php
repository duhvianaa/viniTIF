<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\produtoController;



Route::post('/cadastro_produto', [produtoController::class, 'cadastro_produto']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [LoginController::class, 'login_api']);

Route::post('/cadastro_usuario', [UsuarioController::class, 'cadastro_usuario']);

Route::post('/cadastro_produto', [produtoController::class, 'cadastro_produto']);