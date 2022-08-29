<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lineapedido extends Model
{
    use HasFactory;
        //relacion uno a muchoas 
        public function pedido(){
            return $this->belongsTo(lineapedido::class);
        }
    
    
        public  function producto(){
            return $this->hasMany(producto::class) ;
       }
    
       public function image(){
        return $this->morphOne(image::class,'imageable');
       }
}
