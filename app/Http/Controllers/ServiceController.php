<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Service_Category;

use Illuminate\Http\Request;

class ServiceController extends Controller
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
        $services = Service::with('service_categories')->get();
        return view('service.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Funcion del create que redirige a la vista de creación

    public function create()
    {
        $services = Service::all();
        return view('service.create', compact('services'));
    
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
        Service::create([
            'code' => $request->get('code'),
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'service_categories_id' => $request->get('service_categories_id'),
        ]);

        return redirect('service');
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
        $service = Service::find($id);
        $category = Service_Category::all();

        return view('service.edit', compact('service','category'));
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
        $service = Service::find($id);
        $service->code = $request->input('code');
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        $service->service_Categories_id = $request->input('service_categories_id');

        $category = Service_Category::all();

        $service->update();

        return view('service.edit', compact('service','category'));
   
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
        $service = Service::find($id);
        $service->delete();

        return redirect('service');
    }
}
