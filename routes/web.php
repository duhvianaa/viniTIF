<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\bem_vindoController;


// LOGIN
Route::get('/login', [LoginController::class, 'login_html']);


// PÁGINA INICIAL
Route::get('/', function () {
    return view('welcome');
});


// CADASTRO DE USUÁRIO
Route::get('/cadastro_usuario', [UsuarioController::class, 'cadastro_usuario_html']);


// BEM-VINDO
Route::get('/bem_vindo', [bem_vindoController::class, 'bem_vindo_html']);


// CADASTRO DE PRODUTO
Route::get('/cadastro_produto', [ProdutoController::class, 'cadastro_produto_html']);