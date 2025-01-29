<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function detalles()
    {
        return $this->hasOne(DetalleRestaurante::class, 'restaurante_id');
    }

    public function menus()
    {
        return $this->hasMany(Menu::class, 'restaurante_id');
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'restaurante_id');
    }
}