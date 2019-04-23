<h1>Nuestros clientes</h1>
<ul>
	@foreach ($clientes as $cliente)
	<li>{{ $cliente }}</li>
	@endforeach
</ul>