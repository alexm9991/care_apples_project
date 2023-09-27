<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipality;

class MunicipalityController extends Controller
{

    public function index()
    {
        $municipalities = Municipality::all();
        return view('municipality.index', compact('municipalities'));
    }

    public function create()
    {
        return view('municipality.create');
    }

    public function store(Request $request)
    {
        Municipality::create([
            'name' => $request->get('name')
        ]);

        return redirect('municipality');
    }

    public function show($id)
    {
        //
    }

    public function edit(string $id)
    {
        $municipality = Municipality::find($id);

        return view('municipality.edit', compact('municipality'));
    }

    public function update(Request $request, string $id)
    {
        $municipality =Municipality::find($id);
        $municipality->name = $request->input('name');

        $municipality->update();

        return redirect('municipality');
    }

    public function destroy(string $id)
    {
        $municipality = Municipality::find($id);
        $municipality->delete();

        return redirect('municipality');
    }
}
