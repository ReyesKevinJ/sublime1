<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\color;
use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\tamaño;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    use WithPagination;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $productos= producto::all();
        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $color= color::pluck('color','id');
        $tamaño= tamaño::pluck('tamaño','id');
        return view('admin.productos.create', compact('color','tamaño'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'nombre'=>'required',
            'caracteristica'=>'required',
            'precio'=>'required',
            'descripcion'=>'required',
            'color_id'=>'required',
            'tamaño_id'=>'required',
        ]);
        $producto= producto::create($request->all());
        if ($request->file('image')) {
            $url= Storage::put('public/image',$request->file('image'));
            $producto->image()->create([
                'url'=>$url
            ]);
        }
        return redirect()->route('admin.productos.index',$producto)->with('success','El producto fue CARGADO');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        return view('admin.productos.show', compact('producto') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        $color= color::pluck('color','id');
        $tamaño= tamaño::pluck('tamaño','id');

        return view('admin.productos.edit', compact('producto','color','tamaño') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {

        $request->validate([
            'nombre'=>'required',
            'caracteristica'=>'required',
            'precio'=>'required',
            'descripcion'=>'required',
            'color_id'=>'required',
            'tamaño_id'=>'required',
        ]);
        $producto->update($request->all());
        if ($request->file('image')) {
            $url= Storage::put('public/image',$request->file('image'));
            Storage::delete($producto->image->url);
            $producto->image()->create([
                'url'=>$url
            ]);
        }
        return redirect()->route('admin.productos.index')->with('info','El producto fue EDITADO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        $producto->delete();
        return redirect()->route('admin.productos.index')->with('danger','El producto fue ELIMINADO');
    }
}
