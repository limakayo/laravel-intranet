@extends('layouts.app')

@section('content')
	<h2>Cadastrar Proposta</h2>

	<form action="{{ url('propostaVenda') }}" method="POST">
		{!! csrf_field() !!}

		<div class="form-group">
			<label for="nome">Produto</label>
			<select name="produto_id" id="produto" class="form-control">
				@foreach($produtos as $produto)
					<option value="{{ $produto->id }}">{{ $produto->nome }}</option>
				@endforeach
			</select>
		</div>

		<button class="btn btn-default" type="submit">Cadastrar</button>
	</form>
@stop