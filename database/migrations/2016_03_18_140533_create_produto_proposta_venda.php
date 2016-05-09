<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoPropostaVenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_proposta_venda', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produto_id')->unsigned();
            $table->integer('proposta_venda_id')->unsigned();
            $table->foreign('produto_id')
                  ->references('id')
                  ->on('produto')
                  ->onDelete('cascade');
            $table->foreign('proposta_venda_id')
                  ->references('id')
                  ->on('proposta_venda')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produto_proposta_venda');
    }
}
