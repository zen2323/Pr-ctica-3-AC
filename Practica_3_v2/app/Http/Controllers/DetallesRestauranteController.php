<?php

namespace App\Http\Controllers;

use App\Models\DetalleRestaurante;
use Illuminate\Http\Request;

class DetallesRestauranteController extends Controller
{
    public function index()
    {
        return DetalleRestaurante::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'restaurante_id' => 'required|exists:restaurante,id',
            'direccion' => 'required|string|max:255',
            'horario' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
        ]);

        return DetalleRestaurante::create($validatedData);
    }

    public function show($id)
    {
        return DetalleRestaurante::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $detalle = DetalleRestaurante::findOrFail($id);

        $validatedData = $request->validate([
            'restaurante_id' => 'nullable|exists:restaurante,id',
            'direccion' => 'nullable|string|max:255',
            'horario' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|max:15',
        ]);

        $detalle->update($validatedData);

        return $detalle;
    }

    public function destroy($id)
    {
        $detalle = DetalleRestaurante::findOrFail($id);
        $detalle->delete();

        return response(null, 204);
    }
}