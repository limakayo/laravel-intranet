@extends('layouts.app')

@section('content')
	<h2>Proposta de Venda</h2>

	<ul class="list-group">
		@foreach ($propostas as $proposta)
			<li class="list-group-item"><a href="{{ route('propostaVenda.show', ['proposta' => $proposta]) }}">{{ $proposta->id }}</a></li>
		@endforeach
	</ul>

	<a href="{{ route('propostaVenda.create') }}" class="btn btn-primary">Nova Proposta</a>
@stop