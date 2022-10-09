
@extends('adminlte::page')
@section('title', 'SublimeFire-Admin')

@section('content_header')
    <h1>Cargar Producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route'=>'admin.productos.store','autocomplet'=>'off','files'=>true]) !!}
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
            {!! Form::select('color_id', $color,null,['class'=>'mx-3 my-2 btn btn-outline-dark','placeholder'=>'Seleccionar Color']) !!}
            @error('color_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('tamaño_id','Tamaño') !!}
            {!! Form::select('tamaño_id', $tamaño,null,['class'=>'mx-3 my-2 btn btn-outline-dark','placeholder'=>'Seleccionar Tamaño']) !!}
            @error('tamaño_id')
                <span class="taxt-danger">{{$message}}</span>
            @enderror
        </div>
        {{-- <div class="form-group">
            {!! Form::label('image','Imagen') !!}
            {!! Form::file('image',['class'=>'form-control-file','accept'=>'/image/**']) !!}
            @error('image')
                <span class="taxt-danger">{{$menssage}}</span>
            @enderror
        </div> --}}

        {!! Form::submit('Guardar',['class'=>'btn btn-primary'] ) !!}
    {!! Form::close() !!}
        </div>
    </div>
@stop
@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}">  </script>
@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}

