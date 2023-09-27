@extends('layouts.app')
@section('title','Categoria de Servicios')

@section('content')

<h1 class="text-center">Gestión de Categorias de servicio</h1>

<div class="mx-5 px-5">
    <table class="table table-hover">

        <a href="service_category/create" class="btn btn-success  mb-5"><i class="bi bi-plus-lg"></i>  Crear Categoria</a>

        <thead>
            <tr>
                <th class="text-center">NOMBRE</th>
                <th class="text-center">EDITAR</th>
                <th class="text-center">ELIMINAR</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($service_categories as $category)

            <tr>
                <td class="text-center align-middle" style="font-size: 130%;">{{ $category->name }}</td>
                <td class="text-center">
                    <div class="row">
                        <a class="btn" href="{{ route('service_category.edit', $category->id) }}"><i class="bi bi-pencil-square" style="color:green; font-size:150%"></i></a>
                    </div>
                </td>
                <td class="text-center">

                    <form action="{{ route('service_category.destroy', $category->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link" onclick="return confirm('¿Estás seguro de que deseas eliminar este service_typecipio?')">
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