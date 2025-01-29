<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return Cliente::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'referido_por' => 'nullable|exists:cliente,id',
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:cliente',
            'telefono' => 'required|string|max:15',
        ]);

        return Cliente::create($validatedData);
    }

    public function show($id)
    {
        return Cliente::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $validatedData = $request->validate([
            'referido_por' => 'nullable|exists:cliente,id',
            'nombre' => 'nullable|string|max:255',
            'correo' => 'nullable|email|unique:cliente,correo,' . $id,
            'telefono' => 'nullable|string|max:15',
        ]);

        $cliente->update($validatedData);

        return $cliente;
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return response(null, 204);
    }
}