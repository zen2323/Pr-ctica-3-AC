<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Cliente::create([
            'referido_por' => null,
            'nombre' => 'Alexia',
            'correo' => 'alexiaforpresident',
            'telefono' => 7878887
        ]);
    
    }
}
