<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function index()
    {
        return Reserva::with(['cliente', 'restaurante'])->get();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'restaurante_id' => 'required|exists:restaurantes,id',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'n_personas' => 'required|integer|min:1',
        ]);

        return Reserva::create($validatedData);
    }

    public function show($id)
    {
        return Reserva::with(['cliente', 'restaurante'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $reserva = Reserva::findOrFail($id);

        $validatedData = $request->validate([
            'cliente_id' => 'nullable|exists:clientes,id',
            'restaurante_id' => 'nullable|exists:restaurantes,id',
            'fecha' => 'nullable|date',
            'hora' => 'nullable|date_format:H:i',
            'n_personas' => 'nullable|integer|min:1',
        ]);

        $reserva->update($validatedData);

        return $reserva;
    }

    public function destroy($id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->delete();

        return response(null, 204);
    }
}
