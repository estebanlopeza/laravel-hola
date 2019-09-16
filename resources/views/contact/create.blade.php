@extends('layouts.app')

@section('title', 'Contactanos')

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Contactanos</h1>
		</div>
	</div>

	@if( ! session()->has('message') )
	<form action="/contact" method="post">
		<div class="form-group">
			<label for="name">Nombre</label>
			<input type="text" class="form-control" id="name" name="name" value="{{ @old(name) }}">
			<p>{{ $errors->first('name') }}</p>
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" class="form-control" id="email" name="email" value="{{ @old(email) }}">
			<p>{{ $errors->first('email') }}</p>
		</div>

		<div class="form-group">
			<label for="message">Mensaje</label>
			<textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ @old(message) }}</textarea>
			<p>{{ $errors->first('message') }}</p>
		</div>

	@csrf

	<button type="submit" class="btn btn-primary">Enviar</button>

	</form>
	@endif

@endsection