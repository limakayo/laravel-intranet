<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropostaVenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposta_venda', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cliente')->nullable();
            $table->string('valor_produtos')->nullable();
            $table->string('valor_taxas')->nullable();
            $table->string('valor_total')->nullable();
            $table->string('condicao_pagamento')->nullable();
            $table->string('prazo_pagamento')->nullable();
            $table->string('prazo_entrega')->nullable();
            $table->string('frete')->nullable();
            $table->string('validade_proposta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proposta_venda');
    }
}
