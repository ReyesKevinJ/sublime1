<?php

namespace App\Http\Controllers;

use App\Models\lineapedido;
use App\Models\pedido;
use Illuminate\Http\Request;
use App\Models\producto;
use Cart;

class CarritoController extends Controller
{
    public function agregaritem(Request $request){
        $producto=producto::find($request->producto_id);
        Cart::add([
            'id' => $producto->id,
            'name' => $producto->nombre,
            'price' => $producto->precio,
            'qty' => 1,
            'weight' => 1,
            'options'=>[
                'urlfoto'=>$producto->image->url,
                'nombre'=>null,
            ]
        ]);
        return redirect()->back();
    }
    public function incrmentQty(Request $request ){
        $item=Cart::content()->where('rowId',$request->id)->first();
        Cart::update($request->id,[
            'qty'=>$item->qty+1 ]);
        return back();
    }
    public function decrementaQty (Request $request ){
        $item=Cart::content()->where('rowId',$request->id)->first();
        Cart::update($request->id,[
            'qty'=>$item->qty-1 ]);
        return back();
    }
    public function eliminarItem (Request $request ){
        Cart::remove($request->id);
        return back();
    }
    public function eliminarCarrito (Request $request ){
        Cart::destroy();
        return back();
    }
    public function ConfirmarCarrito(){
        $pedido = pedido::create ([

            'users_id'=> auth()->user()->id,

        ]);
        foreach (Cart::content() as $item) {
                $lineapedido= new lineapedido();
                $lineapedido->cantidad = $item->qty;
                $lineapedido->producto_id = $item->id;
                $lineapedido->pedido_id = $pedido->id;
                $lineapedido-> save();
        }
        Cart::destroy();
        return redirect()->back();
        

    }
    


}
