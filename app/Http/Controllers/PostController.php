<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class PostController extends Controller
{
    public function index(){
        $posts= producto::all();
        return view('posts.index' ,compact('posts'));
    }
    public function show(){

        return view('posts.prueba');
    }
}
