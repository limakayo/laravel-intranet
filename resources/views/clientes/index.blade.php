@extends('layouts.app')

@section('content')

	<h2>Clientes</h2>

	<ul class="list-group">
		@foreach ($clientes as $cliente)
			<li class="list-group-item"><a href="{{ route('cliente.show', ['cliente' => $cliente]) }}">{{ $cliente->nome }}</a></li>
		@endforeach
	</ul>
	
	<a href="{{ route('cliente.create') }}" class="btn btn-primary">Adicionar Cliente</a>
@stop