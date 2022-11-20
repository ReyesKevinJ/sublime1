@extends('adminlte::page')
@section('title', 'SublimeFire-Admin')

@section('content_header')
    <h1>Editar Tamaño</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open([$colore,'route'=>['admin.colores.update',$colore],'method'=>'put','autocomplete'=>'off']) !!}
            {!! Form::hidden('user_id', auth()->user()->id) !!}
            <div class="form group">
                {!! Form::label('color', 'Color') !!}
                {!! Form::text('color', $colore->color, ['class'=>'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm','placeholder'=>'Ingresar Tamaño']) !!}
                @error('color')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mt-3">
                    {!! Form::submit('Guardar',['class'=>'btn bg-sky-500 text-white'] ) !!}
            </div>

            {!! Form::close() !!}
        </div>
        </div>
    </div>
@stop
