@extends('layouts.app')
@section('title','Establecimientos')

@section('content')

<h1 class="text-center">Gestión de Establecimientos</h1>

<div class="mx-5 px-5">
    <table class="table table-hover">

        <a href="{{Route('establishment.create')}}" class="btn btn-success  mb-5"><i class="bi bi-plus-lg"></i> Crear Municipio</a>

        <thead>
            <tr>
                <th class="text-center">CODIGO</th>
                <th class="text-center">NOMBRE</th>
                <th class="text-center">ADMINISTRADOR</th>
                <th class="text-center">DIRECCION</th>
                <th class="text-center">EDITAR</th>
                <th class="text-center">ELIMINAR</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($establishments as $establishment)

            <tr>
                <td class="text-center align-middle" style="font-size: 130%;">{{ $establishment->code }}</td>
                <td class="text-center align-middle" style="font-size: 130%;">{{ $establishment->name }}</td>
                <td class="text-center align-middle" style="font-size: 130%;">{{ $establishment->manager }}</td>
                <td class="text-center align-middle" style="font-size: 130%;">{{ $establishment->address }}</td>
                <td class="text-center">
                    <div class="row">
                        <a class="btn" href="{{ route('establishment.edit', $establishment->id) }}"><i class="bi bi-pencil-square" style="color:green; font-size:150%"></i></a>
                    </div>
                </td>
                <td class="text-center">

                    <form action="{{ route('establishment.destroy', $establishment->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link" onclick="return confirm('¿Estás seguro de que deseas eliminar este establecimiento?')">
                            <i class="bi bi-trash" style="color: red; font-size: 150%;"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop