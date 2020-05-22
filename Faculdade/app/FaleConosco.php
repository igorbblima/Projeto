<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaleConosco extends Model
{
    protected $table = "_faleconosco";
    protected $fillable=["nome" , "email" , "titulo" , "assunto"];
}
