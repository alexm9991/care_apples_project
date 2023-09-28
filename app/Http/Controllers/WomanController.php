<?php

namespace App\Http\Controllers;

use App\Models\Woman;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WomanController extends Controller
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
        $womans = Woman::all();
        return view('woman.index', ['womans' => $womans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Funcion del create que redirige a la vista de creación

    public function create()
    {
        return view('woman.create');
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
        Woman::create([
            'name' => $request->get('name'),
            'last_name' => $request->get('last_name'),
            'identification_type_id' => $request->get('identification_type_id'),
            'identification_number' => $request->get('identification_number'),
            'phone_number' => $request->get('phone_number'),
            'city' => $request->get('city'),
            'address' => $request->get('address'),
            'occupation' => $request->get('occupation'),
            'services_id' => $request->get('services_id'),
            'users_id' => $request->get('users_id'),
        ]);

        return redirect('woman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $woman = Woman::find($id);
        return view('woman.edit', compact('woman'));
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
        $woman =Woman::find($id);
        $woman->name = $request->input('name');
        $woman->last_name = $request->input('last_name');
        $woman->identification_type_id = $request->input('identification_type_id');
        $woman->identification_number = $request->input('identification_number');
        $woman->phone_number = $request->input('phone_number');
        $woman->city = $request->input('city');
        $woman->address = $request->input('address');
        $woman->occupation = $request->input('occupation');
        $woman->services_id = $request->input('services_id');
        $woman->users_id = $request->input('users_id');

        $woman->update();

        return redirect('woman');
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
        $woman = Woman::find($id);
        $woman->delete();

        return redirect('woman');
    }
}
