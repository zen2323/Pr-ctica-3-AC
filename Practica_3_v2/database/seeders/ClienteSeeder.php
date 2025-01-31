<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nombre' => 'Juan Pérez',
            'correo' => 'juan.perez@example.com',
            'telefono' => '123456789',
            'referido_por' => null,
        ]);

        Cliente::create([
            'nombre' => 'Ana López',
            'correo' => 'ana.lopez@example.com',
            'telefono' => '987654321',
            'referido_por' => 1, // El cliente 1 refiere a este cliente
        ]);

        Cliente::create([
            'nombre' => 'Carlos García',
            'correo' => 'carlos.garcia@example.com',
            'telefono' => '112233445',
            'referido_por' => 2, // El cliente 2 refiere a este cliente
        ]);
    }
}
