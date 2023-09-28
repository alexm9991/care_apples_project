<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Establishment;

class EstablishmentController extends Controller
{
    public function __construct()
    {
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
        $establishments = Establishment::all();
        return view('establishment.index', compact('establishments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Funcion del create que redirige a la vista de creación

    public function create()
    {
        return view('establishment.create');
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
        Establishment::create([
            'code' => $request->get('code'),
            'name' => $request->get('name'),
            'manager' => $request->get('manager'),
            'address' => $request->get('address'),

        ]);

        return redirect('establishment');
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
        $establishment = Establishment::find($id);
        return view('establishment.edit', compact('establishment'));
   
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
        $establishment =Establishment::find($id);
        $establishment->code = $request->input('code');
        $establishment->name = $request->input('name');
        $establishment->manager = $request->input('manager');
        $establishment->address = $request->input('address');

        $establishment->update();

        return redirect('establishment');
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
        $establishment = Establishment::find($id);
        $establishment->delete();

        return redirect('establishment');
    }
}
