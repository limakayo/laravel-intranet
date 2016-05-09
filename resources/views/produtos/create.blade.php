@extends('layouts.app')

@section('content')
	<h2>Cadastrar Produto</h2>

	<form action="{{ url('produto') }}" method="POST">
		{!! csrf_field() !!}

		<div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome" id="nome">
			@if ($errors->has('nome'))
                <span class="help-block">
                    <strong>{{ $errors->first('nome') }}</strong>
                </span>
            @endif
		</div>

		<button class="btn btn-default" type="submit">Cadastrar</button>
	</form>
@stop