<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipality;

class MunicipalityController extends Controller
{
/* todas las acciones (métodos) del controlador 
requerirán que el usuario
 esté autenticado antes de poder acceder a ellas. */
 public function __construct(){
    $this->middleware('auth');
}
    // Funcion del index, donde  enlista los registros existentes

    public function index()
    {
        $municipalities = Municipality::all();
        return view('municipality.index', compact('municipalities'));
    }
    // Funcion del create que redirige a la vista de creación

    public function create()
    {
        return view('municipality.create');
    }
    // Funcion del store que crea el registro con los datos especificados

    public function store(Request $request)
    {
        Municipality::create([
            'name' => $request->get('name')
        ]);

        return redirect('municipality')->with('ok', 'ok');;
    }

    public function show($id)
    {
        //
    }
    // Funcion del edit que abre la vista de editar

    public function edit(string $id)
    {
        $municipality = Municipality::find($id);

        return view('municipality.edit', compact('municipality'));
    }

    // Funcion del update que permite modificar el servicio especificado por el id

    public function update(Request $request, string $id)
    {
        $municipality =Municipality::find($id);
        $municipality->name = $request->input('name');

        $municipality->update();

        return redirect('municipality');
    }
    // Funcion del destroy que elimina el registro en la base de datos

    public function destroy(string $id)
    {
        $municipality = Municipality::find($id);
        $municipality->delete();

        return redirect('municipality');
    }
}
