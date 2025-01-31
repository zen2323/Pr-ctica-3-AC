<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuPlato;

class MenuPlatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MenuPlato::create([
            'menu_id' => 1,
            'plato_id' => 1, // Relación con Plato "Pizza Margherita"
        ]);

        MenuPlato::create([
            'menu_id' => 2,
            'plato_id' => 2, // Relación con Plato "Sushi Rolls"
        ]);

        MenuPlato::create([
            'menu_id' => 3,
            'plato_id' => 3, // Relación con Plato "Paella Valenciana"
        ]);
    }
}
