<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false;

    //Lista permitida pelo mass-assignment
    protected $fillable = ['nome', 'descricao', 'quantidade', 'valor', 'peso'];

    //Lista NÃO permitida pelo mass-assignment
    protected $guarded = ['id'];
}
