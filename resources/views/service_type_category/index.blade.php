@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<h2 class="my-3 text-center">TIPO DE SERVICIO Y CATEGORIA</h2>

		<button type="button" class="btn btn-success mb-5" data-toggle="modal" data-target="#create">
                <i class="bi bi-plus-lg"></i> Crear Relación
            </button>

		<div class="table-responsive">
			<table class="table">
				<thead class="bg-dark text-white">
					<tr>
						<th class="text-center">TIPO DE SERVICIO</th>
						<th class="text-center">CATEGORIA DE SERVICIO</th>
						<th class="text-center">EDITAR</th>
						<th class="text-center">ELIMINAR</th>
					</tr>
				</thead>
				<tbody>
                @foreach ($service_type_category as $type_has_category)

            <tr>
            <td class="text-center align-middle" style="font-size: 130%;">			 
				{{ $type_has_category->service_type_id }}
            </td>

			<td class="text-center align-middle" style="font-size: 130%;">			    
				{{ $type_has_category->service_category_id }}
			</td>

    <td class="text-center">
        <button type="button" class="btn align-middle" data-toggle="modal" data-target="#edit{{$type_has_category -> id}}">
            <i class="bi bi-pencil-square" style="color:green; font-size:150%"></i>
        </button>
    </td>

    <td class="text-center">
        <button type="button" class="btn align-middle" onclick="eliminar(event)" data-toggle="modal" data-target="#delete{{ $type_has_category->id }}">
		<i class="bi bi-trash" style="color: red; font-size: 150%;"></i>
        </button>
    </td>
</tr>
@endforeach

		@include('service_type_category.edit')
				</tbody>
			</table>
		</div>
		@include('service_type_category.create')
	</div>
	<div class="col-md-2"></div>
</div>
@endsection @section('css')
<link rel="stylesheet" href="sweetalert2.min.css"> @endsection @section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
	function eliminar(event) {
	            event.preventDefault();
	            Swal.fire({
	                title: 'Desea eliminar el juego:  '
	               ,
	                text: "El juego se eliminará definitivamente",
	                icon: 'warning',
	                showCancelButton: true,
	                confirmButtonColor: '#3085d6',
	                cancelButtonColor: '#d33',
	                confirmButtonText: 'Eliminar',
	                cancelButtonText: 'Cancelar',
	            }).then((result) => {
	                if (result.isConfirmed) {
	                    window.location.href = event.target.href;
	                }
	            });
	        }
	
</script>
@endsection