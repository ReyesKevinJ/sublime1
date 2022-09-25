@extends('layouts.crud');
@section('contenido')
    <a href="productos/create" class="btn btn-success">Cargar</a>
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Caracteristicas</th>
                <th scope="col">Precio</th>
                <th scope="col">Color</th>
                <th scope="col">Tamaño</th>
                <th scope="col">Create</th>
                <th scope="col">Edit</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
    </table>
    <tbody>
        @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id}}</td>
                <td>{{ $producto->nombre}}</td>
                <td>{{ $producto->caracteristica}}</td>
                <td>{{ $producto->precio}}</td>
                <td>{{ $producto->color_id}}</td>
                <td>{{ $producto->tamaño_id}}</td>
                <td>{{ $producto->created_ad}}</td>
                <td>{{ $producto->update_ad}}</td>
                <td>
                    <a href="" class="btn btn-info">Editar</a>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection