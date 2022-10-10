@extends('adminlte::page')
@section('title', 'SublimeFire-Admin')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">

        {!! Form::model($producto,['route'=>['admin.productos.update', $producto],'method'=>'put' ,'autocomplet'=>'off','files'=>'true']) !!}
        {!! Form::hidden('user_id', auth()->user()->id) !!}

    <div class="form group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Ingresar Nombre de Producto']) !!}
        @error('nombre')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form group">
        {!! Form::label('caracteristica', 'Caracteristicas') !!}
        {!! Form::text('caracteristica', null, ['class'=>'form-control','placeholder'=>'Ingresar Caracteristicas de Producto']) !!}
        @error('caracteristica')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form group">
        {!! Form::label('precio', 'Precio') !!}
        {!! Form::number('precio', null, ['class'=>'form-control','placeholder'=>'0.00']) !!}
        @error('precio')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!! Form::label('color_id','Color') !!}
        {!! Form::select('color_id', $color,['placeholder'=>'Seleccionar Color']) !!}
        @error('color_id')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        {!! Form::label('tamaño_id','Tamaño') !!}
        {!! Form::select('tamaño_id', $tamaño,['placeholder'=>'Seleccionar Tamaño']) !!}
        @error('tamaño_id')
            <span class="taxt-danger">{{$message}}</span>
        @enderror
    </div>
    {{-- <div class="form-group">
        {!! Form::label('image','Imagen') !!}
        {!! Form::file('image',['accept'=>'image/*','class'=>'form-control-file']) !!}
        @error('image')
            <span class="taxt-danger">{{$menssage}}</span>
        @enderror
    </div> --}}

    {!! Form::submit('Guardar',['class'=>'btn btn-primary'] ) !!}
    {!! Form::close() !!}
    </div>
</div>
@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}
