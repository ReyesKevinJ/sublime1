<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lineapedido extends Model
{
    use HasFactory;
        //relacion uno a muchoas 
        public function pedido(){
            return $this->belongsTo(pedido::class, 'pedido_id');
        }
    
    
        public  function producto(){
            return $this->belongsTo(producto::class , 'producto_id') ;
       }
    
       public function image(){
        return $this->morphOne(image::class,'imageable');
       }
}
