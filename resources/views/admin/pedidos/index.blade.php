@extends('adminlte::page')
@section('title', 'SublimeFire-Admin')

@section('content_header')
    <h1>Pedidos a Realizar</h1>
@stop

@section('content')
<div class="card">

    <div class="card-header">
        <div class="input-group">
            <div class="input-group-append">
                <button class="btn"><i class="fas fa-search"></i></button>
            </div>
            <input wire:model="search"  class="form-control" placeholder="Buscar Producto">
        </div>
     </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center bg-amber-200">Id</th>
                    <th class="text-center bg-amber-200">Fecha</th>
                    <th class="text-center bg-amber-200" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)

                    <tr>
                        <td class="text-center">{{$pedido->id}} </td>
                        <td class="text-center">{{$pedido->created_at}}</td>
                        {{-- <td class="text-center"><a class="btn btn-success" href="{{route('admin.productos.edit', $producto)}}">Editar</a></td>
                        <td class="text-center">
                            <form action="{{route('admin.productos.destroy',$producto)}}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" onclick="return confirm(¿Quiere Eliminar el Producto?)" class=" text-white btn bg-red-800" value="Eliminar" >
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
