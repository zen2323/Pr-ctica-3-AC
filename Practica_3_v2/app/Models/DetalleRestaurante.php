<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleRestaurante extends Model
{
    use HasFactory;

    protected $table = 'detalle_restaurantes';

    protected $fillable = ['restaurante_id', 'direccion', 'horario', 'telefono'];

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'restaurante_id');
    }
}