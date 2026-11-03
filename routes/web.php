<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\bem_vindoController;
use App\Http\Controllers\ComunicacaoController;


Route::get('/login', [LoginController::class, 'login_html']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro_usuario', [UsuarioController::class, 'cadastro_usuario_html']);

Route::get('/bem_vindo', [bem_vindoController::class, 'bem_vindo_html']);


Route::get('/cadastro_produto', [ProdutoController::class, 'cadastro_produto_html']);

route::get('/luzes', [ComunicacaoController::class, 'luzes_html']);
route::get('/nfc', [ComunicacaoController::class, 'nfc_html']);