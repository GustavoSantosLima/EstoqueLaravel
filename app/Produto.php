<?php

namespace Estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false;

    //Lista permitida pelo mass-assignment
    protected $fillable = ['nome', 'descricao', 'quantidade', 'valor', 'peso', 'categoria_id'];

    //Lista NÃO permitida pelo mass-assignment
    protected $guarded = ['id'];

    public function categoria(){
        return $this->belongsTo('Estoque\Categoria');
    }
}
