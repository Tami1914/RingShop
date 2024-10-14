<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ring;

class RingController extends Controller
{
    public function index() // devuelve los datos (un GET)
    {
        $rings = Ring::all();
        return view('rings.index', compact('rings'));
    }

    public function create() // crea datos
    {
        return view('rings.create');
    }

    public function store(Request $request) // almacena datos 
    {
        $ring = new Ring;
        $ring->diameter = $request->input('diameter');
        $ring->material = $request->input('material');
        $ring->save();

        return redirect()->route('rings.index');
    }

    public function destroy(Ring $ring)
    {
        $ring->delete();

        return to_route('rings.index')->with('status', 'Ring deleted');
    }

    public function edit(Ring $ring)
    {
        return view('rings.edit', ['ring' => $ring]);
    }

    public function update(Request $request, Ring $ring)
    {
        $ring->diameter = $request->input('diameter');
        $ring->material = $request->input('material');
        $ring->save();

        session()->flash('status', 'Ring updated');

        return redirect()->route('rings.index', $ring);
    }
}
