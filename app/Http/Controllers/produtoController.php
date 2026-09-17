<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class produtoController extends Controller
{
    public function cadastro_produto_html(Request $request)
    {
        return view('cadastro_produto');
    }

    public function cadastro_produto(Request $request)
    {
        $produto = new produto();

        $produto->nome_produto = $request->nome_produto;
        $produto->categoria = $request->categoria;
        $produto->codigo = $request->codigo;
        $produto->fornecedor = $request->fornecedor;
        $produto->quantidade_estoque = $request->quantidade_estoque;
        $produto->data_vencimento = $request->data_vencimento;
        $produto->descricao = $request->descricao;

        $produto->save();

        return response()->json([
            'erro' => 'n',
            'mensagem' => 'Produto cadastrado com sucesso!'
        ]);
    }
}