@extends('layouts.app')

@section('title', 'Listado de clientes')

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Listado de clientes</h1>
			<p><a href="clientes/create">Agregar cliente</a></p>
		</div>
	</div>

	@foreach ($clientes as $cliente)
	<div class="row">
		<div class="col-2">{{ $cliente->id }}</div>
		<div class="col-4">
			<a href="/clientes/{{ $cliente->id }}">{{ $cliente->name }}</a>
		</div>
		<div class="col-4">{{ $cliente->company->name }}</div>
		<div class="col-2">{{ $cliente->active }}</div>
	</div>
	@endforeach

@endsection