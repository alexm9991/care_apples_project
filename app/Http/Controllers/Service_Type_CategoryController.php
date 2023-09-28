<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Service_Type_CategoryController extends Controller
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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Ejemplo de obtener los tipos de servicio relacionados con una categoría específica
$category = Service_Category::find(1);
$serviceTypes = $category->serviceTypeCategory->map(function ($item) {
    return $item->serviceType;
});

// Ejemplo de obtener las categorías de servicio relacionadas con un tipo de servicio específico
$type = Service_Type::find(1);
$serviceCategories = $type->serviceTypeCategory->map(function ($item) {
    return $item->serviceCategory;
});
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Obtener todas las categorías de un tipo de servicio
$serviceType = Service_Types::find(1);
$categories = $serviceType->categories;

// Obtener todos los tipos de servicio de una categoría
$category = Service_Categories::find(1);
$types = $category->types;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
