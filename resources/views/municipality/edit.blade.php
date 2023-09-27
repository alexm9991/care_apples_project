@extends('layouts.app')
@section('title','Municipios')

@section('content')

<h1 class="text-center">Editar Municipios</h1>

<div class="mx-5 px-5">
    <form action="{{Route('municipality.update', $municipality->id)}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">NOMBRE</label>
            <input type="text" class="form-control" value="{{ $municipality->name }}" id="name" name="name" placeholder="Ingrese el nombre del municipio" required>
        </div>

        <button type="submit" class="btn btn-success"><i class="bi bi-pencil-square"></i> Editar</button>
        <a href="{{ route('apple.index') }}" class="btn btn-danger"><i class="bi bi-x-lg"></i> Cancelar</a>

    </form>
</div>
@endsection
