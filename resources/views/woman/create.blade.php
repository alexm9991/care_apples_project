@extends('layouts.app')
@section('title','Mujeres')

@section('content')

<h1 class="text-center">Crear Mujeres</h1>

<div class="mx-5 px-5">
    <form action="{{Route('woman.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>NOMBRE</label>
            <input type="text" class="form-control " id="name" name="name" required>
        </div>
        <div class="form-group">
            <label>APELLIDO</label>
            <input type="text" class="form-control " id="last_name" name="last_name" required>
        </div>

        <div class="form-group">
            <label>TIPO DE IDENTIFICACION</label>
            <input type="number" class="form-control " id="identification_type" name="identification_type" required>
        </div>
        <div class="form-group">
            <label>NUMERO DE IDENTIFICACION</label>
            <input type="number" class="form-control " id="identification_number" name="identification_number" required>
        </div>
        <div class="form-group">
            <label>TELEFONO</label>
            <input type="number" class="form-control " id="phone_number" name="phone_number" placeholder="Ingrese latitud" required>
        </div>
        <div class="form-group">
            <label>CIUDAD</label>
            <input type="text" class="form-control " id="city" name="city" required>
        </div>
        <div class="form-group">
            <label">DIRECCION</label>
            <input type="text" class="form-control " id="address" name="address" required>
        </div>
        <div class="form-group">
            <label>OCUPACION</label>
            <input type="text" class="form-control " id="occupation" name="occupation" required>
        </div>

        <button type="submit" class="btn btn-success"><i class="bi bi-plus-lg"></i> Crear</button>
        <a href="{{ route('woman.index') }}" class="btn btn-danger"><i class="bi bi-x-lg"></i> Cancelar</a>

    </form>
</div>
@stop