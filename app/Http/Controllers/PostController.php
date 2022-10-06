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
    public function show(producto $post){
        return $post;
    }
}