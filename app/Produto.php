<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';

    public function propostas()
    {
    	return $this->belongsToMany('App\PropostaVenda');
    }
}
