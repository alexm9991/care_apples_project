@extends('layouts.app')
@section('title','Manzanas')

@section('content')
<style>
    /* Estilo del elemento donde se mostrará el mapa */
    #map {
      width: 600px;
      height: 400px;
    }
  </style>

<h1 class="text-center">Gestión de Manzanas</h1>

<div class="mx-5 px-5">
    <table class="table table-hover">

        <a href="apple/create" class="btn btn-success mb-5"><i class="bi bi-plus-lg"></i>  Crear Manzanas</a>

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
        </tbody>
    </table>


<!-- Mapa -->
<h1 style="text-align:center">Mapa</h1>
<!-- Elemento donde se mostrará el mapa -->
<div id="map" class="mt-5" style="margin:auto" ></div>

<!-- Carga de la API de Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=TU_CLAVE_DE_API&callback=iniciarMap"></script>

<!-- Código JavaScript para crear el mapa y los marcadores -->
<script>
  // Función que se ejecuta cuando la API de Google Maps está lista
  function iniciarMap() {
    // Array con las coordenadas que queremos mostrar en el mapa
    var coordenadas = [
      {lat: 4.818770036643793, lng: -75.74115243484906}, // Pereira, Colombia
      {lat: -33.8688, lng: 151.2093}, // Sydney, Australia
      {lat: 40.7128, lng: -74.0060}, // Nueva York, Estados Unidos
      {lat: 48.8566, lng: 2.3522}, // París, Francia
      {lat: 35.6895, lng: 139.6917} // Tokio, Japón
    ];

    // Creación del objeto mapa con las propiedades deseadas
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 2, // nivel de zoom del mapa
      center: {lat: 0, lng: 0} // centro del mapa (coordenadas del ecuador)
    });

    // Bucle para recorrer el array de coordenadas y crear los marcadores
    for (var i = 0; i < coordenadas.length; i++) {
      // Creación del objeto marcador con las propiedades deseadas
      var marker = new google.maps.Marker({
        position: coordenadas[i], // posición del marcador según la coordenada correspondiente
        map: map, // mapa al que pertenece el marcador
        title: 'Coordenada ' + (i + 1) // título del marcador que se muestra al pasar el cursor sobre él
      });
    }
  }
</script>

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>




</div>
@stop