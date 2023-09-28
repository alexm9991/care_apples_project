@extends('layouts.app')
@section('title','Manzanas')

@section('content')

<h1 class="text-center">Crear Manzanas</h1>

<div class="mx-5 px-5">
    <form action="{{Route('apple.store')}}" method="POST">
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
            <label>LOCALIDAD</label>
            <input type="text" class="form-control " id="location" name="location" required>
        </div>
        <div class="form-group">
            <label>DIRECCION</label>
            <input type="text" class="form-control " id="address" name="address" required>
        </div>
        <div class="form-group">
            <label>LATITUD</label>
            <input type="number" class="form-control " id="latitude" name="latitude" placeholder="Ingrese latitud" required>
        </div>
        <div class="form-group">
            <label>LONGITUD</label>
            <input type="number" class="form-control " id="length" name="length" placeholder="Ingrese longitud" required>
        </div>
        <div class="form-group">
            <label>MUNICIPIO</label>

            <select type="form-select" name="municipalities_id" class="form-control" required>
                <option selected>Seleccione un Municipio</option>
                
                @foreach($municipalities as $muni)
                <option value="{{$muni->id}}">{{$muni->name}} </option>
                @endforeach
                
            </select>

        </div>

        <button type="submit" class="btn btn-success"><i class="bi bi-plus-lg"></i> Crear</button>
        <a href="{{ route('apple.index') }}" class="btn btn-danger"><i class="bi bi-x-lg"></i> Cancelar</a>

    </form>
</div>
@stop