@extends('adminlte::page')
@section('title', 'SublimeFire-Admin')

@section('content_header')
    <h1>Mostrar Detalle</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header text-center">


                <h3 class="text-2xl"><a href="{{route('admin.pedidos.index' )}}" class=""><i class="fas fa-caret-left"></i></a>Pedido Realizado por {{$pedido->user->name}}</h3>

        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">
                            Fecha del Pedido
                        </th>
                        <th class="text-center">
                            Producto
                        </th>
                        <th class="text-center">
                            Cantidad
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedido->lineapedido as $pedidos)
                        <tr>
                            <td class="text-center">
                                {{$pedidos->created_at}}
                            </td>
                            <td class="text-center">
                                {{$pedidos->producto->nombre}}
                            </td>
                            <td class="text-center">
                                {{$pedidos->cantidad}}
                            </td>


                        </tr>
                        @endforeach
                </tbody>
            </table>

        </div>
        <div class="card-footer text-muted text-center">

                <form action="{{route('admin.pedidos.destroy',$pedido)}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" onclick="return confirm('¿El pedido se fianlizo?')" class=" text-white btn bg-red-800" value="Finalizar Pedido" >
                </form>

          </div>
    </div>
@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}
