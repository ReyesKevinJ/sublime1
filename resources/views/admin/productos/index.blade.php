@extends('adminlte::page')
@section('title', 'SublimeFire-Admin')

@section('content_header')
    <h1>Lista de Productos</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-info" >
            <strong>{{session('info')}}</strong>
        </div>


    @elseif (session('success'))
        <div class="alert alert-primary">
            <strong>{{session('success')}}</strong>
        </div>
    @elseif (session('danger'))
        <div class="alert alert-danger">
            <strong>{{session('danger')}}</strong>
        </div>
    @endif
    <div class="card">

            <div class="card-header">
                <a href="{{route('admin.productos.create')}}" class="btn btn-primary">Agregar Producto</a>
            </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center bg-warning">Id</th>
                        <th class="text-center bg-warning">Name</th>
                        <th class="text-center bg-warning">Caracteristicas</th>
                        <th class="text-center bg-warning">Color</th>
                        <th class="text-center bg-warning">Tamaño</th>
                        <th class="text-center bg-warning" colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td class="text-center">{{$producto->id}} </td>
                            <td class="text-center">{{$producto->nombre}}</td>
                            <td class="text-center">{{$producto->caracteristica}}</td>
                            <td class="text-center">{{$producto->color->color}}</td>
                            <td class="text-center">{{$producto->tamaño->tamaño}}</td>
                            <td class="text-center"><a class="btn btn-success" href="{{route('admin.productos.edit', $producto)}}">Editar</a></td>
                            <td class="text-center">
                                <form action="{{route('admin.productos.destroy',$producto)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" onclick="return confirm(¿Quiere Eliminar el Producto?)" class="btn btn-danger" value="Eliminar" >
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
{{--
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop--}}

@section('js')
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/jquery/jquery.js"></script>
@stop
