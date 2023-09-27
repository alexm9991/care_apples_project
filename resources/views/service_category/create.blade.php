@extends('layouts.app')
@section('title','Categoria')

@section('content')

<h1 class="text-center">Crear Categoria</h1>

<div class="mx-5 px-5">
    <form action="{{Route('service_category.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">NOMBRE</label>
            <input type="text" class="form-control " id="name" name="name" placeholder="Ingrese la categoria" required>
        </div>

        <button type="submit" class="btn btn-success"><i class="bi bi-plus-lg"></i> Crear</button>
        <a href="{{ route('service_category.index') }}" class="btn btn-danger"><i class="bi bi-x-lg"></i> Cancelar</a>

    </form>
</div>
@stop