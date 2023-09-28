@extends('layouts.app')
@section('title','Servicios')

@section('content')

<h1 class="text-center">Gestión de Servicios</h1>

<div class="mx-5 px-5">
    <table class="table table-hover">

        <a href="{{ route('service.create') }}" class="btn btn-success mb-5"><i class="bi bi-plus-lg"></i>  Crear Servicio</a>

        <thead>
            <tr>
                <th class="text-center">CODIGO</th>
                <th class="text-center">NOMBRE</th>
                <th class="text-center">DESCRIPCION</th>
                <th class="text-center">EDITAR</th>
                <th class="text-center">ELIMINAR</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)

            <tr>

            <td class="text-center align-middle" style="font-size: 130%;">{{ $service->code }}</td>
            <td class="text-center align-middle" style="font-size: 130%;">{{ $service->name }}</td>
            <td class="text-center align-middle" style="font-size: 130%;">{{ $service->description }}</td>
                <td class="text-center">
                    <div class="row">
                        <a class="btn" href="{{ route('service.edit', $service->id) }}"><i class="bi bi-pencil-square" style="color:green; font-size:150%"></i></a>
                    </div>
                </td>
                <td class="text-center">

                    <form action="{{ route('service.destroy', $service->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link" onclick="return confirm('¿Estás seguro de que deseas eliminar el servicio?')">
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