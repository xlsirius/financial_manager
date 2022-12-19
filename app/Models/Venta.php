<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos producto
   public function productos()
   {
     return $this->belongsTo('App\Models\Producto');
   }

}
