<?php

namespace App\Http\Controllers;

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
            'qty'=>$item->qty+1        ]);
        return back();
    }

}
