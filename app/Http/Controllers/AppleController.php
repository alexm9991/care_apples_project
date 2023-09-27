<?php

namespace App\Http\Controllers;

use App\Models\Apple;
use App\Models\Municipality;

use Illuminate\Http\Request;

class AppleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apples = Apple::all();
        $municipalities = Municipality::all();
        return view('apple.index', compact('apples','municipalities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
        Apple::create([
            'code' => $request->get('code'),
            'name' => $request->get('name'),
            'location' => $request->get('location'),
            'address' => $request->get('address'),
            'coordinates' => $request->get('coordinates'),
            'municipalities_id' => $request->get('municipalities_id'),

        ]);

        return redirect('apple');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apple = Apple::find($id);

        return view('apple.edit', compact('apple'));
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
        $apple =Apple::find($id);
        $apple->code = $request->input('code');
        $apple->name = $request->input('name');
        $apple->location = $request->input('location');
        $apple->address = $request->input('address');
        $apple->coordinates = $request->input('coordinates');
        $apple->municipalities_id = $request->input('municipalities_id');

        $apple->update();

        return redirect('apple');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apple = Apple::find($id);
        $apple->delete();

        return redirect('apple');
    }
}
