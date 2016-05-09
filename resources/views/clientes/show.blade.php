@extends('layouts.app')

@section('content')

	<h2>Cliente</h2>

	<h3>{{ $cliente->nome }}</h3>

	<hr>

	<div class="row">
		<div class="col-md-2">
			<a href="{{ route('cliente.edit', ['cliente'=>$cliente]) }}" class="btn btn-primary">Editar Cliente</a>	
		</div>
		<div class="col-md-3">
			<form action="{{ url('clientes/'.$cliente->id) }}" method="POST">
				{!! csrf_field() !!}
				{!! method_field('DELETE') !!}

				<button type="submit" id="delete-cliente-{{ $cliente->id }}" class="btn btn-danger">
			        <i class="fa fa-btn fa-trash"></i>Delete
			    </button>
			</form>	
		</div>
	</div>
@stop