<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $table = 'produto';

    protected $fillable = [
        'nome_produto',
        'categoria',
        'codigo',
        'fornecedor',
        'quantidade_estoque',
        'data_vencimento',
        'descricao'
    ];
}