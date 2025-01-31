<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reserva;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reserva::create([
            'cliente_id' => 1,
            'restaurante_id' => 1,
            'fecha' => '2025-02-01',
            'hora' => '13:00:00',
            'n_personas' => 2,
        ]);

        Reserva::create([
            'cliente_id' => 2,
            'restaurante_id' => 2,
            'fecha' => '2025-02-02',
            'hora' => '14:00:00',
            'n_personas' => 4,
        ]);

        Reserva::create([
            'cliente_id' => 3,
            'restaurante_id' => 3,
            'fecha' => '2025-02-03',
            'hora' => '15:00:00',
            'n_personas' => 3,
        ]);
    }
}
