@extends('layouts.app')
@section('title','Manzanas')

@section('content')

<h1 class="text-center">Gestión de Manzanas</h1>

<div class="mx-5 px-5">
    <table class="table table-hover">

        <a href="apple/create" class="btn btn-success  mb-5">Crear Manzanas</a>

        <thead>
            <tr>

                <th class="text-center">CODE</th>
                <th class="text-center">NOMBRE</th>
                <th class="text-center">LOCALIDAD</th>
                <th class="text-center">DIRECCCION</th>
                <th class="text-center">COORDENADAS</th>
                <th class="text-center">MUNICIPIO</th>
                <th class="text-center">VER</th>
                <th class="text-center">EDITAR</th>
                <th class="text-center">ELIMINAR</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($apples as $apple)

            <tr>

            <td class="text-center align-middle" style="font-size: 130%;">{{ $apple->code }}</td>
            <td class="text-center align-middle" style="font-size: 130%;">{{ $apple->name }}</td>
            <td class="text-center align-middle" style="font-size: 130%;">{{ $apple->location }}</td>
            <td class="text-center align-middle" style="font-size: 130%;">{{ $apple->address }}</td>
            <td class="text-center align-middle" style="font-size: 130%;">{{ $apple->latitude }} , {{ $apple->length }}</td>

            <td class="text-center align-middle" style="font-size: 130%;">
                @if ($apple->municipalities->isNotEmpty())
                    {{ $apple->municipalities->first()->name }}
                @else
                    Sin municipio asignado
                @endif
            </td>

                <td class="text-center align-middle" style="font-size: 130%;">icon ver</td>
                <td class="text-center">
                    <div class="row">
                        <a class="btn" href="{{ route('apple.edit', $apple->id) }}"><i class="bi bi-pencil-square" style="color:green; font-size:150%"></i></a>
                    </div>
                </td>
                <td class="text-center">

                    <form action="{{ route('apple.destroy', $apple->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link" onclick="return confirm('¿Estás seguro de que deseas eliminar esta manzana?')">
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