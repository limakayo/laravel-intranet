@extends('layouts.app')

@section('content')
	<h2>Cadastrar Cliente</h2>

	<form action="{{ url('cliente') }}" method="POST">
		{!! csrf_field() !!}

		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome" id="nome">
		</div>

		<button class="btn btn-default" type="submit">Cadastrar</button>
	</form>
@stop