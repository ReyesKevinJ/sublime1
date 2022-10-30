<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pedido;
use App\Models\User;
use App\Models\lineapedido;

class PedidoController extends Controller
{
    public function index(){
        $pedidos=pedido::all();


        return view('pedidos.index', compact('pedidos'));
    }
    public function show(pedido $pedido){



        return view('pedidos.show' ,compact('pedido') );

    }
}
