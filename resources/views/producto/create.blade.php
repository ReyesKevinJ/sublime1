@extends('layouts.crud');
@section('contenido')
    <form action="/productos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Caracteristicas</label>
            <input id="caracteristica" name="caracteristica" type="text" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="3">
        </div>




        <a href="/productos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button class="btn btn-primary" tabindex="4">Guardar</button>
    </form>    
@endsection