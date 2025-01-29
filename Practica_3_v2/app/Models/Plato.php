<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'precio'];

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_plato')->withPivot('menu_id', 'plato_id');
    }
}