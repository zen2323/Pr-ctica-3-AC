<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['referido_por', 'nombre', 'correo', 'telefono'];

    public function referidoPor()
    {
        return $this->belongsTo(Cliente::class, 'referido_por');
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'cliente_id');
    }
}
