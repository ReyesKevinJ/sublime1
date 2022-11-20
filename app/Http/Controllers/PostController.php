<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class PostController extends Controller
{
    public function index(){
        $productos = producto::paginate(6);
        return view('posts.index', compact('productos'));
    }
    public function show(producto $producto){
        return view('posts.show' ,compact('producto') );
    }

    public function welcome(){
        $productos = producto::latest('id')->paginate(4);

        return view('welcome', compact('productos'));
    }
}
