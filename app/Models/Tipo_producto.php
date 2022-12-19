<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_producto extends Model
{
    use HasFactory;

    // Relacion Uno a muchos Producto
    public function tipo_animal()
    {
      return $this->hasMany('App\Models\Producto');
    }
}
