@extends('layouts.app')

@section('content')

	<h2>Proposta Venda</h2>

	<h3>{{ $propostaVenda->id }}</h3>

	<hr>

	<div class="row">
		<div class="col-md-2">
			<a href="{{ route('propostaVenda.edit', ['propostaVenda'=>$propostaVenda]) }}" class="btn btn-primary">Editar Proposta</a>	
		</div>
		<div class="col-md-3">
			<form action="{{ url('propostaVenda/'.$propostaVenda->id) }}" method="POST">
				{!! csrf_field() !!}
				{!! method_field('DELETE') !!}

				<button type="submit" id="delete-proposta-{{ $propostaVenda->id }}" class="btn btn-danger">
			        <i class="fa fa-btn fa-trash"></i>Delete
			    </button>
			</form>	
		</div>
	</div>
@stop