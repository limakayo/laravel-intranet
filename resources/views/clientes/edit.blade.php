@extends('layouts.app')

@section('content')
	<h1>Editar Cliente</h1>

	<h2>{{ $cliente->nome }}</h2>

	<form action="/clientes/{{ $cliente->id }}" method="POST">
		{{ method_field('PATCH') }}
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome" id="nome" value="{{ $cliente->nome }}">
		</div>

		<button class="btn btn-primary" type="submit">Alterar Cliente</button>
	</form>
@stop