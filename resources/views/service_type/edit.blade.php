@extends('layouts.app')
@section('title','Tipo de Servicio')

@section('content')

<h1 class="text-center">Editar Tipo de Servicio</h1>

<div class="mx-5 px-5">
    <form action="{{Route('service_type.update', $service_type->id)}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">TIPO DE SERVICIO</label>
            <input type="text" class="form-control" value="{{ $service_type->name }}" id="name" name="name" placeholder="Ingrese el tipo de servicio" require>
        </div>

        <button type="submit" class="btn btn-success"><i class="bi bi-pencil-square"></i> Editar</button>
        <a href="{{ route('service_type.index') }}" class="btn btn-danger"><i class="bi bi-x-lg"></i> Cancelar</a>

    </form>
</div>
@endsection
