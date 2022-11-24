<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colores= color::all();
        return view('admin.colores.index', compact('colores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.colores.create');
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
            'color'=>'required|unique:colors',

        ]);
        $color= color::create($request->all());
        return redirect()->route('admin.colores.index',$color)->with('success','El color fue CARGADO');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(color $colore)
    {
        return view('admin.colores.edit', compact('colore') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, color $colore)
    {
        $request->validate([
            'color'=>'required',

        ]);
        $colore->update($request->all());
        return redirect()->route('admin.colores.index')->with('info','El color fue EDITADO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(color $colore)
    {
        $colore->delete();
        return redirect()->route('admin.colores.index')->with('danger','El color fue ELIMINADO');
    }
}
