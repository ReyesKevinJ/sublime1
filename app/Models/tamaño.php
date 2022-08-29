<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tamaño extends Model
{
    use HasFactory;
    public function producto(){
        return $this->hasMany(producto::class);
    }
}
