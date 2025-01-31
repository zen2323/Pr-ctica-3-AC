<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plato;

class PlatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plato::create([
            'nombre' => 'Pizza Margherita',
            'descripcion' => 'Pizza clásica con tomate, mozzarella y albahaca.',
            'precio' => 8.00,
        ]);

        Plato::create([
            'nombre' => 'Sushi Rolls',
            'descripcion' => 'Rollos de sushi con pescado fresco y arroz.',
            'precio' => 12.00,
        ]);

        Plato::create([
            'nombre' => 'Paella Valenciana',
            'descripcion' => 'Arroz con mariscos, carne y verduras.',
            'precio' => 15.00,
        ]);
    }
}
