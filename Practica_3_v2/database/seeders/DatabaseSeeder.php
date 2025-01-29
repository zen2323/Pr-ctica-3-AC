<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetalleRestaurante;


class DatabaseSeeder extends Seeder
{
    /**
     * Ejecutar los Seeders.
     */
    public function run()
    {
        $this->call([
            ClienteSeeder::class,
            RestauranteSeeder::class,
            DetalleRestauranteSeeder::class, // 📌 Verifica que el nombre coincida
            MenuSeeder::class,
            PlatoSeeder::class,
            MenuPlatoSeeder::class,
            ReservaSeeder::class,
        ]);
        
    }
}
