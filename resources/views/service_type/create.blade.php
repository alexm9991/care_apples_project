@extends('layouts.app')
@section('title','Tipo de servicios')

@section('content')

<h1 class="text-center">Crear Tipo de Servicios</h1>

<div class="mx-5 px-5">
    <form action="{{Route('service_type.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">TIPO DE SERVICIO</label>
            <input type="text" class="form-control " id="name" name="name" placeholder="Ingrese el tipo de servicio" require>
        </div>

        <button type="submit" class="btn btn-success"><i class="bi bi-plus-lg"></i> Crear</button>
        <a href="{{ route('service_type.index') }}" class="btn btn-danger"><i class="bi bi-x-lg"></i> Cancelar</a>
    </form>
</div>
@stop