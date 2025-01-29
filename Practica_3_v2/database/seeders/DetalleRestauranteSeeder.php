<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetalleRestaurante;

class DetalleRestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetalleRestaurante::create([
            'restaurante_id' => 1,
            'direccion' => 'Calle 123, Madrid',
            'horario' => '10:00 - 23:00',
            'telefono' => '912345678',
        ]);

        DetalleRestaurante::create([
            'restaurante_id' => 2,
            'direccion' => 'Avenida Principal, Barcelona',
            'horario' => '11:00 - 22:00',
            'telefono' => '934567890',
        ]);
    }
}
