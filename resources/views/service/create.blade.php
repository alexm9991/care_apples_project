@extends('layouts.app')
@section('title','Servicio')

@section('content')

<h1 class="text-center">Crear Servicio</h1>

<div class="mx-5 px-5">
    <form action="{{Route('service.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>CODIGO</label>
            <input type="number" class="form-control " id="code" name="code" required>
        </div>

        <div class="form-group">
            <label>NOMBRE</label>
            <input type="text" class="form-control " id="name" name="name" required>
        </div>

        <div class="form-group">
            <label>DESCRIPCION</label>
            <input type="textarea" class="form-control " id="description" name="description" required>
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


        <button type="submit" class="btn btn-success"><i class="bi bi-plus-lg"></i> Crear</button>
        <a href="{{ route('service.index') }}" class="btn btn-danger"><i class="bi bi-x-lg"></i> Cancelar</a>

    </form>
</div>
@stop