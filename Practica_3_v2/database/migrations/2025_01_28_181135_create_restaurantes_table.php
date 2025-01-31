<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion'); // Agregamos la dirección
            $table->string('telefono'); // Agregamos el teléfono
            $table->string('tipo_cocina'); // Agregamos tipo de cocina
            $table->time('horario_apertura'); // Agregamos horario de apertura
            $table->time('horario_cierre'); // Agregamos horario de cierre
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurantes');
    }
};
