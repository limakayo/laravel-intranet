<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome'];

    protected $hidden = ['contato', 'email', 'ddd', 'telefone', 'celular', 'cnpj', 'cpf', 'ie', 'cep', 'endereco', 'bairro', 'cidade', 'estado', 'observacao', 'created_at', 'updated_at'];
}
