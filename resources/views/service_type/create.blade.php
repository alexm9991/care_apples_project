@extends('layouts.app')
@section('title','Municipios')

@section('content')

<h1 class="text-center">Crear Municipios</h1>

<div class="mx-5 px-5">
    <form action="{{Route('municipality.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">NOMBRE</label>
            <input type="text" class="form-control " id="name" name="name" placeholder="Ingrese el nombre del municipio" require>
        </div>

        <button type="submit" class="btn btn-success">Crear</button>
        <a href="./" class="btn btn-danger">Cancelar</a>

    </form>
</div>
@stop