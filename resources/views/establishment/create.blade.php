@extends('layouts.app')
@section('title','Municipios')

@section('content')

<h1 class="text-center">Crear Establecimiento</h1>

<div class="mx-5 px-5">
    <form action="{{Route('establishment.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>CODIGO</label>
            <input type="number" class="form-control " id="code" name="code"  required>
        </div>
        <div class="form-group">
            <label>NOMBRE</label>
            <input type="text" class="form-control " id="name" name="name" required>
        </div>
        <div class="form-group">
            <label>ADMINISTRADOR</label>
            <input type="text" class="form-control " id="manager" name="manager" required>
        </div>
        <div class="form-group">
            <label>DIRECCIÓN</label>
            <input type="text" class="form-control " id="address" name="address" required>
        </div>

        <button type="submit" class="btn btn-success"><i class="bi bi-plus-lg"></i> Crear</button>
        <a href="{{Route('establishment.index')}}" class="btn btn-danger"><i class="bi bi-x-lg"></i> Cancelar</a>

    </form>
</div>
@stop