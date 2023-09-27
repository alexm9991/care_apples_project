@extends('layouts.app')
@section('title','Municipios')

@section('content')

<h1 class="text-center">Gestión de Categorias de servicio</h1>

<div class="mx-5 px-5">
    <table class="table table-hover">

        <a href="muni/create" class="btn btn-success  mb-5">Crear Municipio</a>

        <thead>
            <tr>

                <th class="text-center">NOMBRE</th>
                <th class="text-center">EDITAR</th>
                <th class="text-center">ELIMINAR</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($service_types as $service_type)

            <tr>

                <td class="text-center align-middle" style="font-size: 130%;">{{ $service_type->name }}</td>
                <td class="text-center">
                    <div class="row">
                        <a class="btn" href="{{ route('ser$service_type.edit', $service_type->id) }}"><i class="bi bi-pencil-square" style="color:green; font-size:150%"></i></a>
                    </div>
                </td>
                <td class="text-center">

                    <form action="{{ route('ser$service_type.destroy', $service_type->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link" onclick="return confirm('¿Estás seguro de que deseas eliminar este service_typecipio?')">
                            <i class="bi bi-trash" style="color: red; font-size: 150%;"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach

            <tr>

            </tr>

        </tbody>
    </table>
</div>
@stop