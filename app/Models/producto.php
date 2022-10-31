<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class producto extends Model
{
    use HasFactory;
    protected $fillable=['nombre','caracteristica','precio','descripcion','color_id','tamaño_id'];
    public function color(){
        return $this->belongsTo(color::class,'color_id');
    }
    public function tamaño (){
        return $this->belongsTo(tamaño::class);
    }
    public function lineapedido(){
        return $this->belongsTo(lineapedido::class);
    }
    public function image(){
        return $this->morphOne(image::class,'imageable');
    }
}
