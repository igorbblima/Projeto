<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produtos";
    protected $fillable=["nome_do_produto" , "imagem" , "quantidade" , "preco"];
}
