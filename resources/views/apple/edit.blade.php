@extends('layouts.app') @section('title','Manzanas') @section('content')

<h1 class="text-center">Editar Manzanas</h1>

<div class="mx-5 px-5">
	<form action="{{Route('apple.update', $apple->id)}}" method="POST">
		@csrf @method('PUT')

		<div class="form-group">
			<label for="code">CODIGO</label>
			<input type="number" class="form-control" value="{{ $apple->code }}" id="code" name="code" required>
		</div>

		<div class="form-group">
			<label for="name">NOMBRE</label>
			<input type="text" class="form-control" value="{{ $apple->name }}" id="name" name="name" placeholder="Ingrese el nombre de la manzana" required>
		</div>

		<div class="form-group">
			<label for="location">LOCALIDAD</label>
			<input type="text" class="form-control" value="{{ $apple->location }}" id="location" name="location" required>
		</div>

		<div class="form-group">
			<label for="address">DIRECCION</label>
			<input type="text" class="form-control" value="{{ $apple->address }}" id="address" name="address" required>
		</div>

		<div class="form-group">
			<label for="latitude">LATITUD</label>
			<input type="number" class="form-control " value="{{ $apple->latitude }}" id="latitude" name="latitude" placeholder="Ingrese latitud" required>
		</div>

		<div class="form-group">
			<label for="length">LONGITUD</label>
			<input type="number" class="form-control " value="{{ $apple->length }}" id="length" name="length" placeholder="Ingrese longitud" required>
		</div>

		<div class="form-group">
			<label for="municipalities_id">MUNICIPIO</label>
			<select class="form-control" name="municipalities_id" required>
        @foreach($municipalities as $municipality)
            <option value="{{ $municipality->id }}" {{ $municipality->id == $apple->municipalities_id ? 'selected' : '' }}>
                {{ $municipality->name }}
            </option>
        @endforeach
    </select>
		</div>

		<button type="submit" class="btn btn-success"><i class="bi bi-pencil-square"></i> Editar</button>
		<a href="{{ route('apple.index') }}" class="btn btn-primary"><i class="bi bi-arrow-return-left"></i> Volver</a>

	</form>
</div>
@endsection