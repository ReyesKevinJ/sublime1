<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\pedido;

class pedidosController extends Controller
{
    public function index(){
        // $pedidos=pedido::where('user_id', auth()->user()->id);
        $pedidos=pedido::all();

        return view('pedidos.index', compact('pedidos'));
    }
    public function show(pedido $pedido){
       
        // aparezca productos similares video 7 (destalles post) minuto 11:20
        // $similares = 
        
        return view('pedidos.show' ,compact('pedido') );
        
    }
    
}
