<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurante;

class RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restaurante::create([
            'nombre' => 'La Casa de la Pizza',
            'direccion' => 'Calle 123, Madrid',
            'telefono' => '912345678',
            'tipo_cocina' => 'Italiana',
            'horario_apertura' => '13:00',
            'horario_cierre' => '23:00',
        ]);

        Restaurante::create([
            'nombre' => 'Sushi World',
            'direccion' => 'Avenida Central, Barcelona',
            'telefono' => '934567890',
            'tipo_cocina' => 'Japonesa',
            'horario_apertura' => '12:00',
            'horario_cierre' => '22:00',
        ]);

        Restaurante::create([
            'nombre' => 'El Asador del Valle',
            'direccion' => 'Plaza Mayor, Valencia',
            'telefono' => '961234567',
            'tipo_cocina' => 'Española',
            'horario_apertura' => '11:00',
            'horario_cierre' => '23:30',
        ]);
    }
}
