<?php

Route::group(['middleware' => ['cors']], function() {
    Route::resource('cliente', 'ClienteController');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'HomeController@index');

    /**
     * Clientes
     *
    Route::get('/clientes', 'ClienteController@index')->name('clientes.index');
    Route::get('/clientes/{cliente}', 'ClienteController@show')->name('clientes.show');

    Route::post('/clientes', 'ClienteController@store')->name('clientes.store');

    Route::get('/clientes/create', 'ClienteController@create')->name('clientes.create');

    

    
    Route::get('/clientes/{cliente}/edit', 'ClienteController@edit')->name('clientes.edit');
    Route::delete('/clientes/{cliente}', 'ClienteController@destroy')->name('clientes.destroy');

    Route::patch('/clientes/{cliente}', 'ClienteController@update');*/

    Route::resource('/produto', 'ProdutoController');
    Route::resource('/propostaVenda', 'PropostaVendaController');
});
