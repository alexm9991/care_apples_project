@extends('layouts.app')
@section('title','Municipios')

@section('content')

<h1 class="text-center">Gestión de Municipios</h1>

<div class="mx-5 px-5">
    <table class="table table-hover">

        <a href="municipality/create" class="btn btn-success  mb-5"><i class="bi bi-plus-lg"></i> Crear Municipio</a>

        <thead>
            <tr>

                <th class="text-center">NOMBRE</th>
                <th class="text-center">EDITAR</th>
                <th class="text-center">ELIMINAR</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($municipalities as $muni)

            <tr>

                <td class="text-center align-middle" style="font-size: 130%;">{{ $muni->name }}</td>
                <td class="text-center">
                    <div class="row">
                        <a class="btn" href="{{ route('municipality.edit', $muni->id) }}"><i class="bi bi-pencil-square" style="color:green; font-size:150%"></i></a>
                    </div>
                </td>
                <td class="text-center">

                    <form action="{{ route('municipality.destroy', $muni->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link" onclick="return confirm('¿Estás seguro de que deseas eliminar este municipio?')">
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