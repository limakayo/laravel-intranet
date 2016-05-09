@extends('layouts.app')

@section('content')
	
	<h2>Produtos</h2>
	
	<ul class="list-group">
		@foreach ($produtos as $produto)
			<li class="list-group-item">
				<a href="{{ route('produto.show', ['produto' => $produto]) }}">{{ $produto->nome }}</a>
			</li>
		@endforeach
	</ul>
	
	<a href="{{ route('produto.create') }}" class="btn btn-primary">Adicionar Produto</a>

@stop