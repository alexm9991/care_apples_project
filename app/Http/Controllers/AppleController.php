<?php

namespace App\Http\Controllers;

use App\Models\Apple;
use App\Models\Municipality;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AppleController extends Controller
{
  /* todas las acciones (métodos) del controlador 
requerirán que el usuario
 esté autenticado antes de poder acceder a ellas. */
 public function __construct(){
    $this->middleware('auth');
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Funcion del index, donde  enlista los registros existentes
    public function index()
    {
        $apples = Apple::with('municipalities')->get();
        return view('apple.index', ['apples' => $apples]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Funcion del create que redirige a la vista de creación
    public function create()
    {
        $municipalities = Municipality::all();
        return view('apple.create', compact('municipalities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Funcion del store que crea el registro con los datos especificados
    public function store(Request $request)
    {
        Apple::create([
            'code' => $request->get('code'),
            'name' => $request->get('name'),
            'location' => $request->get('location'),
            'address' => $request->get('address'),
            'latitude' => $request->get('latitude'),
            'length' => $request->get('length'),
            'municipalities_id' => $request->get('municipalities_id'),

        ]);

        return redirect('apple');
    }

    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Funcion del edit que abre la vista de editar

    public function edit($id)
    {
        $apple = Apple::find($id);
        $municipalities = Municipality::all();

        return view('apple.edit', compact('apple','municipalities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Funcion del update que permite modificar el servicio especificado por el id

    public function update(Request $request, $id)
    {
        $apple =Apple::find($id);
        $apple->code = $request->input('code');
        $apple->name = $request->input('name');
        $apple->location = $request->input('location');
        $apple->address = $request->input('address');
        $apple->latitude = $request->input('latitude');
        $apple->length = $request->input('length');
        $apple->municipalities_id = $request->input('municipalities_id');

        $municipalities = Municipality::all();

        $apple->update();

        return view('apple.edit', compact('apple','municipalities'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Funcion del destroy que elimina el registro en la base de datos

    public function destroy($id)
    {
        $apple = Apple::find($id);
        $apple->delete();

        return redirect('apple');
    }
}
