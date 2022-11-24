@extends('adminlte::page')
@section('title', 'SublimeFire-Admin')

@section('content_header')
    <h1>Lista de Colores</h1>
@stop

@section('content')
<div>
    @if (session('info'))
    <div class="alert alert-info" role="alert" >
    <strong>{{session('info')}}</strong>
    </div>


    @elseif (session('success'))
        <div class="alert alert-primary" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    @elseif (session('danger'))
        <div class="alert alert-danger">
            <strong>{{session('danger')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    @endif
    <div class="card">

        <div class="card-header">
            <div class="input-group">
                <a class="btn btn-primary" href="{{route('admin.colores.create')}}" role="button">Agregar Color</a>
            </div>
         </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center bg-amber-200">Id</th>
                        <th class="text-center bg-amber-200">Color</th>
                        <th class="text-center bg-amber-200" colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($colores as $colore)

                        <tr>
                            <td class="text-center">{{$colore->id}} </td>
                            <td class="text-center">{{$colore->color}}</td>
                            <td class="text-center"><a class="btn btn-success" href="{{route('admin.colores.edit', $colore)}}">Editar</a></td>
                            <td class="text-center">
                                <form action="{{route('admin.colores.destroy',$colore)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" onclick="return confirm('¿Quiere Eliminar el Color?')" class=" text-white btn bg-red-800" value="Eliminar" >
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>



    </div>
</div>
@stop
