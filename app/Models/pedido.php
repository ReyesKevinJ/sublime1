<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;
       //relacion de uno a muchos (inversa)

   

    public function lineapedidos (){
        return $this->hasMany(lineapedido::class);

    
    }
    public function user (){
        return $this->hasMany(User::class , 'users_id');
    }
  
}
