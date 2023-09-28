@extends('layouts.app')
@section('title','Mujeres')

@section('content')

<h1 class="text-center">Gestión de Mujeres</h1>

<div class="mx-5 px-5">
    <table class="table table-hover">

        <a href="{{ route('woman.create') }}" class="btn btn-success mb-5"><i class="bi bi-plus-lg"></i>  Crear Mujeres</a>

        <thead>
            <tr>

                <th class="text-center">NOMBRE</th>
                <th class="text-center">APELLIDO</th>
                <th class="text-center">TIPO DE IDENTIFICACION</th>
                <th class="text-center">NUMERO DE IDENTIFICACION</th>
                <th class="text-center">TELEFONO</th>
                <th class="text-center">CIUDAD</th>
                <th class="text-center">DIRECCION</th>
                <th class="text-center">OCUPACION</th>
                <th class="text-center">EDITAR</th>
                <th class="text-center">ELIMINAR</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($womans as $woman)

            <tr>

            <td class="text-center align-middle" style="font-size: 130%;">{{ $woman->name }}</td>
            <td class="text-center align-middle" style="font-size: 130%;">{{ $woman->last_name }}</td>
            <td class="text-center align-middle" style="font-size: 130%;">{{ $woman->phone_number }}</td>
            <td class="text-center align-middle" style="font-size: 130%;">{{ $woman->city }}</td>
            <td class="text-center align-middle" style="font-size: 130%;">{{ $woman->address }}</td>
            <td class="text-center align-middle" style="font-size: 130%;">{{ $woman->ocupacion }}</td>
            <td class="text-center align-middle" style="font-size: 130%;">{{ $woman->address }}</td>

                <td class="text-center align-middle" style="font-size: 130%;">icon ver</td>
                <td class="text-center">
                    <div class="row">
                        <a class="btn" href="{{ route('woman.edit', $apple->id) }}"><i class="bi bi-pencil-square" style="color:green; font-size:150%"></i></a>
                    </div>
                </td>
                <td class="text-center">

                    <form action="{{ route('woman.destroy', $apple->id) }}" method="POST" style="display: inline;">
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