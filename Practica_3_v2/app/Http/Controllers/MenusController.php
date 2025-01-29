<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function index()
    {
        return Menu::with('restaurante')->get();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'restaurante_id' => 'required|exists:restaurante,id',
            'nombre' => 'required|string|max:255',
        ]);

        return Menu::create($validatedData);
    }

    public function show($id)
    {
        return Menu::with('restaurante')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $validatedData = $request->validate([
            'restaurante_id' => 'nullable|exists:restaurante,id',
            'nombre' => 'nullable|string|max:255',
        ]);

        $menu->update($validatedData);

        return $menu;
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return response(null, 204);
    }
}