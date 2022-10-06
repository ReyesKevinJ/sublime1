<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    public function color(){
        return $this->belongsTo(color::class);
    }
    public function tamaño (){
        return $this->belongsTo(tamaño::class);
    }
    public function lineapedida(){
        return $this->belongsTo(lineapedido::class);
    }
    public function image(){
        return $this->morphOne(image::class,'imageable');
       }

}
