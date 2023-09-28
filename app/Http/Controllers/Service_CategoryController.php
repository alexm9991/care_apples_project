<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service_Category;

class Service_CategoryController extends Controller
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
        $service_categories = Service_Category::all();
        return view('service_category.index', compact('service_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Funcion del create que redirige a la vista de creación

    public function create()
    {
        return view('service_category.create');
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
        Service_Category::create([
            'name' => $request->get('name')
        ]);

        return redirect('service_category');
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
        $service_category = Service_Category::find($id);
        return view('service_category.edit', compact('service_category'));
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
        $service_category = Service_Category::find($id);
        $service_category->name = $request->input('name');

        $service_category->update();

        return redirect('service_category');
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
        $service_category = Service_Category::find($id);
        $service_category->delete();

        return redirect('service_category');
    }
}
