<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service_Type;

class Service_TypeController extends Controller
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
        $service_types = Service_Type::all();
        return view('service_type.index', compact('service_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Service_Type::create([
            'name' => $request->get('name')
        ]);

        return redirect('service_type');
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
    public function edit($id)
    {
        $service_type = Service_Type::find($id);
        return view('service_type.edit', compact('service_type'));
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
        $service_type =Service_Type::find($id);
        $service_type->name = $request->input('name');

        $service_type->update();

        return redirect('service_type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service_type = Service_Type::find($id);
        $service_type->delete();

        return redirect('service_type');
    }
}
