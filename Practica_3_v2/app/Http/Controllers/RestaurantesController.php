<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use Illuminate\Http\Request;

class RestaurantesController extends Controller
{
    public function index()
    {
        return Restaurante::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        return Restaurante::create($validatedData);
    }

    public function show($id)
    {
        return Restaurante::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $restaurante = Restaurante::findOrFail($id);

        $validatedData = $request->validate([
            'nombre' => 'nullable|string|max:255',
        ]);

        $restaurante->update($validatedData);

        return $restaurante;
    }

    public function destroy($id)
    {
        $restaurante = Restaurante::findOrFail($id);
        $restaurante->delete();

        return response(null, 204);
    }
}
