<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\tamaño;
use Illuminate\Http\Request;

class TamañoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tamaños= tamaño::all();
        return view('admin.tamaños.index', compact('tamaños'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tamaños.create');
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
            'tamaño'=>'required|unique:tamaños',

        ]);
        $tamaño= tamaño::create($request->all());
        return redirect()->route('admin.tamaños.index',$tamaño)->with('success','El tamaño fue CARGADO');
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
    public function edit(tamaño $tamaño)
    {
        return view('admin.tamaños.edit', compact('tamaño') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tamaño $tamaño)
    {
        $request->validate([
            'tamaño'=>'required',

        ]);
        $tamaño->update($request->all());
        return redirect()->route('admin.tamaños.index')->with('info','El tamaño fue EDITADO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tamaño $tamaño)
    {
        $tamaño->delete();
        return redirect()->route('admin.tamaños.index')->with('danger','El tamaño fue ELIMINADO');
    }
}
