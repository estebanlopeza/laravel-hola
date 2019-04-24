@extends('layout')


@section('content')

	<h1>Nuestros clientes</h1>
	<ul>
		@foreach ($clientes as $cliente)
		<li>{{ $cliente->name }}</li>
		@endforeach
	</ul>

@endsection