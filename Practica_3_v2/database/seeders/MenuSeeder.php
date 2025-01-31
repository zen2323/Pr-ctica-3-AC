<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'nombre' => 'Menú Ejecutivo',
            'descripcion' => 'Comida del día con plato principal, bebida y postre.',
            'precio' => 12.50,
            'restaurante_id' => 1,
        ]);

        Menu::create([
            'nombre' => 'Menú Infantil',
            'descripcion' => 'Comida ligera para niños con opciones de plato y bebida.',
            'precio' => 8.00,
            'restaurante_id' => 2,
        ]);

        Menu::create([
            'nombre' => 'Menú Degustación',
            'descripcion' => 'Un menú completo con una selección de platos gourmet.',
            'precio' => 35.00,
            'restaurante_id' => 3,
        ]);
    }
}
