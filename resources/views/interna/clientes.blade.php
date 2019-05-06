@extends('layout')

@section('title', 'Listado de clientes')

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Nuestros clientes</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<form action="clientes" method="post">
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
				    <label for="active">Activo</label>
				    <select class="form-control" id="active" name="active">
				    	<option value="1">si</option>
				    	<option value="0">no</option>
					</select>
				 </div>

				<button type="submit" class="btn btn-primary">Enviar</button>

				@csrf

			</form>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-6">
			<h3>Clientes activos</h3>
			<ol>
				@foreach ($clientesActivos as $clienteActivo)
				<li>{{ $clienteActivo->name }} <span class="text-muted">({{ $clienteActivo->email }})</span></li>
				@endforeach
			</ol>	
		</div>
		<div class="col-6">
			<h3>Clientes inactivos</h3>
			<ol>
				@foreach ($clientesInactivos as $clienteInactivo)
				<li>{{ $clienteInactivo->name }} <span class="text-muted">({{ $clienteInactivo->email }})</span></li>
				@endforeach
			</ol>	
		</div>
	</div>

@endsection