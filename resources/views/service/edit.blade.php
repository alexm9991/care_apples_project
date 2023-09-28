@extends('layouts.app') @section('title','Servicios') @section('content')

<h1 class="text-center">Editar Servicio</h1>

<div class="mx-5 px-5">
	<form action="{{Route('service.update', $service->id)}}" method="POST">
		@csrf @method('PUT')

		<div class="form-group">
			<label for="code">CODIGO</label>
			<input type="number" class="form-control" value="{{ $service->code }}" id="code" name="code" required>
		</div>

		<div class="form-group">
			<label for="name">NOMBRE</label>
			<input type="text" class="form-control" value="{{ $service->name }}" id="name" name="name" required>
		</div>

		<div class="form-group">
			<label for="location">DESCRIPCION</label>
			<input type="textarea" class="form-control" value="{{ $service->description }}" id="description" name="description" required>
		</div>

		<div class="form-group">
			<label for="service_categories_id">CATEGORIA</label>
			<select class="form-control" name="service_categories_id" required>
        @foreach($category as $cate)
            <option value="{{ $cate->id }}" {{ $cate->id == $service->service_categories_id ? 'selected' : '' }}>
                {{ $cate->name }}
            </option>
        @endforeach
    		</select>
		</div>

		<button type="submit" class="btn btn-success"><i class="bi bi-pencil-square"></i> Editar</button>
		<a href="{{ route('service.index') }}" class="btn btn-primary"><i class="bi bi-arrow-return-left"></i> Volver</a>

	</form>
</div>
@endsection