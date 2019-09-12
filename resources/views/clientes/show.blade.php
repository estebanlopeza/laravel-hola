@extends('layout')

@section('title', 'Detalle de ' . $cliente->name )

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Detalle de {{ $cliente->name }}</h1>
			<p><a href="/clientes/{{ $cliente->id }}/edit">Editar</a></p>

			<form action="/clientes/{{ $cliente->id}}" method="post">
				@method('DELETE')
				@csrf
				<button class="btn btn-danger" type="submit">Borrar</button>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<p><strong>Nombre: </strong> {{ $cliente->name }}</p>
			<p><strong>Email: </strong> {{ $cliente->email }}</p>
			<p><strong>Empresa: </strong> {{ $cliente->company->name }}</p>

		</div>
	</div>

@endsection
