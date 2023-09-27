<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Service_TypeController;
use App\Http\Controllers\Service_CategoryController;

use App\Models\Service_Type_Category;
use App\Models\Service_Type;
use App\Models\Service_Category;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Service_Type_CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_types = Service_Type::all();
        $service_categories = Service_Category::all();

        $service_type_category = DB::table('service__type__category')
            ->join('service__types', 'service__types.id', '=', 'service__type__category.service_type_id')
            ->join('service__categories', 'service__categories.id', '=', 'service__type__category.service_category_id')
            ->select('service__type__category.*')
            ->get();

        return view('service_type_category.index', [
            'service_type_category' => $service_type_category,
            'service_types' => $service_types,
            'service_categories' => $service_categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service_types = Service_Type::all();
        
        return view('service_type_category.create', compact('service_types'));
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Service_Type_Category::create([
            'service_type_id' => $request->get('service_type_id'),
            'service_category_id' => $request->get('service_category_id')
        ]);

        return redirect(route('service_type_category.index'));
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
        $service_type_category = Service_Type_Category::find($id);
        $service_type_category->service_type_id = $request->input('service_type_id');
        $service_type_category->service_category_id = $request->input('service_category_id');

        $service_type_category->update();
        return view('service_type_category.index', compact('service_type_category'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service_type_category =Service_Type_Category::find($id);
        $service_type_category->delete();
        return redirect(route('service_type_category.index'))->with('ok','ok');
    }
}
