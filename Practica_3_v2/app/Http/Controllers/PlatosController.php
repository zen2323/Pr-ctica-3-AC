<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\Request;

class PlatosController extends Controller
{
    public function index()
    {
        return Plato::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'menu_id' => 'required|exists:menu,id'
        ]);

        return Plato::create($validatedData);
    }

    public function show($id)
    {
        return Plato::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $plato = Plato::findOrFail($id);

        $validatedData = $request->validate([
            'nombre' => 'nullable|string|max:255',
            'precio' => 'nullable|numeric|min:0',
            'menu_id' => 'nullable|exists:menu,id'
        ]);

        $plato->update($validatedData);

        return $plato;
    }

    public function destroy($id)
    {
        $plato = Plato::findOrFail($id);
        $plato->delete();

        return response(null, 204);
    }
}