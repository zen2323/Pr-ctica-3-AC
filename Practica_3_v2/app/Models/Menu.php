<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['restaurante_id', 'nombre'];

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'restaurante_id');
    }

    public function platos()
    {
        return $this->belongsToMany(Plato::class, 'menu_plato')->withPivot('menu_id', 'plato_id');
    }
}