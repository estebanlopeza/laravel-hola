<div class="form-group">
	<label for="name">Nombre</label>
	<input type="text" class="form-control" id="name" name="name" value="{{ @old(name) ?? $cliente->name }}">
	<div>{{ $errors->first('name') }}</div>
</div>

<div class="form-group">
	<label for="email">Email</label>
	<input type="text" class="form-control" id="email" name="email" value="{{ @old(email) ?? $cliente->email }}">
	<div>{{ $errors->first('email') }}</div>
</div>

<div class="form-group">
    <label for="active">Activo</label>
    <select class="form-control" id="active" name="active">

        @foreach($cliente->activeOptions() as $activeOptionKey => $activeOptionVal)
            <option value="{{ $activeOptionKey }}" {{ $cliente->active == $activeOptionVal ? 'selected' : ''}}>{{ $activeOptionVal }}</option>
        @endforeach
	</select>
</div>

<div class="form-group">
    <label for="company_id">Empresa</label>
    <select class="form-control" id="company_id" name="company_id">
    	@foreach ($companies as $company)
    	<option value="{{ $company->id }}" {{ $company->id == $cliente->company_id ? 'selected' : '' }} >{{ $company->name }}</option>
    	@endforeach
	</select>
</div>

<div class="form-group d-flex flex-column">
    <label for="image">Imagen</label>
        <input type="file" name="image" class="py-2">
        <div>{{ $errors->first('image') }}</div>
</div>

@csrf