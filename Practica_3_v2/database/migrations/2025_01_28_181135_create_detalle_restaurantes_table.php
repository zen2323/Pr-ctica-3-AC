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
        Schema::create('detalle_restaurantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('restaurante_id');
            $table->string('direccion');
            $table->string('horario');
            $table->string('telefono');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_restaurante');
    }
};
