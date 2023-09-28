@extends('layouts.app')
@section('title','Establecimientos')

@section('content')

<h1 class="text-center">Editar Establecimiento</h1>

<div class="mx-5 px-5">
    <form action="{{Route('establishment.update', $establishment->id)}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label>CODIGO</label>
            <input type="number" class="form-control" value="{{ $establishment->code }}" id="code" name="code" required>
        </div>
        <div class="form-group">
            <label">NOMBRE</label>
            <input type="text" class="form-control" value="{{ $establishment->name }}" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label>ADMINISTRADOR</label>
            <input type="text" class="form-control" value="{{ $establishment->manager }}" id="manager" name="manager" required>
        </div>
        <div class="form-group">
            <label>DIRECCION</label>
            <input type="text" class="form-control" value="{{ $establishment->address }}" id="address" name="address" required>
        </div>

        <button type="submit" class="btn btn-success"><i class="bi bi-pencil-square"></i> Editar</button>
        <a href="{{ route('establishment.index') }}" class="btn btn-danger"><i class="bi bi-x-lg"></i> Cancelar</a>

    </form>
</div>
@endsection
