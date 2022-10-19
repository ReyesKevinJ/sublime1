<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class producto extends Model
{
    use HasFactory;
    protected $fillable=['nombre','caracteristica','precio','descripcion','color_id','tamaño_id'];
    public function color(){
        return $this->belongsTo(color::class);
    }
    public function tamaño (){
        return $this->belongsTo(tamaño::class);
    }
    public function lineapedida(){
        return $this->belongsTo(lineapedido::class);
    }
    public function producto(){
        return $this->belongsTo(producto::class);
    }
    public function image(){
        return $this->morphOne(image::class,'imageable');
    }
}
