@extends('layouts.app')
@section('title','Categoria de servicios')

@section('content')

<h1 class="text-center">Editar Categoria de servicios</h1>

<div class="mx-5 px-5">
    <form action="{{Route('service_category.update', $service_category->id)}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">NOMBRE</label>
            <input type="text" class="form-control" value="{{ $service_category->name }}" id="name" name="name" placeholder="Ingrese la categoriía" required>
        </div>

        <button type="submit" class="btn btn-success"><i class="bi bi-pencil-square"></i> Editar</button>
        <a href="./" class="btn btn-danger"><i class="bi bi-x-lg"></i> Cancelar</a>

    </form>
</div>
@endsection
