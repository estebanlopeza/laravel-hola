@extends('layout')

@section('title', 'Editar detalles de ' . $cliente->name)

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Editar detalles de {{ $cliente->name }}</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<form action="/clientes/{{ $cliente->id }}" method="post">
				@method('PATCH')
				@include('clientes.form');

				<button type="submit" class="btn btn-primary">Guardar cliente</button>


			</form>
		</div>
	</div>

@endsection