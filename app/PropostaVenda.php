<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropostaVenda extends Model
{
    protected $table = 'proposta_venda';

    public function produtos()
    {
    	return $this->belongsToMany('App\Produto');
    }
}
