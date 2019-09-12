@extends('layout')

@section('title', 'Agregar cliente')

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Agregar cliente</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<form action="/clientes" method="post">

				@include('clientes.form');

				<button type="submit" class="btn btn-primary">Enviar</button>


			</form>
		</div>
	</div>

@endsection