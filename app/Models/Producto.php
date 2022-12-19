<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos productos
   public function users()
   {
     return $this->belongsTo('App\Models\User');
   }

   // Relacion Uno a Muchos tipo_animal
  public function tipo_animals()
  {
    return $this->belongsTo('App\Models\Tipo_animal');
  }

  // Relacion Uno a Muchos tipo_producto
 public function Tipo_productos()
 {
   return $this->belongsTo('App\Models\Tipo_producto');
 }

 // Relacion Uno a muchos Venta
 public function venta()
 {
   return $this->hasMany('App\Models\Venta');
 }

}
