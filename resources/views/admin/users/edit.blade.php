@extends('adminlte::page')
@section('title', 'SublimeFire-Admin')

@section('content_header')
    <h1>Asignar un Rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre</p>
            <p class="form-control">
                {{$user->name}}
            </p>
            <h2 class="h5">Listado de Roles</h2>
            {!! Form::model($user, ['route'=>['admin.users.update',$user],'method'=>'put']) !!}

                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role, null, ['class'=>'m-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
