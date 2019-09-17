@extends('layouts.app')

@section('title', 'Agregar cliente')

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Agregar cliente</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<form action="{{ route('clientes.store') }}" method="post">

				@include('clientes.form');

				<button type="submit" class="btn btn-primary">Enviar</button>

			</form>
		</div>
	</div>

@endsection