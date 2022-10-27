<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\image;
use Illuminate\Http\Request;
use App\Models\producto;

class PostController extends Controller
{
    
    public function index(){
        $productos = Producto::paginate(6);
        return view('productos.index', compact('productos'));
    }
    public function show(producto $producto){
        // aparesca productos similares video 7 (destalles post) minuto 11:20
        // $similares = 
        
        return view('productos.show' ,compact('producto') );
    }
  
    public function welcome(){
        $productos = Producto::latest('id')->paginate(3);
        
        return view('welcome', compact('productos'));
    }
    
}