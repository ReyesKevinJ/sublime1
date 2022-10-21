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
            <div class="input-group">
                <div class="input-group-append">
                    <button class="btn"><i class="fas fa-search"></i></button>
                </div>
                <input wire:model="search"  class="form-control">
            </div>
         </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center bg-amber-200">Id</th>
                        <th class="text-center bg-amber-200">Name</th>
                        <th class="text-center bg-amber-200">Caracteristicas</th>
                        <th class="text-center bg-amber-200">Color</th>
                        <th class="text-center bg-amber-200">Tamaño</th>
                        <th class="text-center bg-amber-200">Descripción</th>
                        <th class="text-center bg-amber-200" colspan="2">Acciones</th>
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
                            <td class="text-center">{{$producto->descripcion}}</td>
                            <td class="text-center"><a class="btn btn-success" href="{{route('admin.productos.edit', $producto)}}">Editar</a></td>
                            <td class="text-center">
                                <form action="{{route('admin.productos.destroy', $producto)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" onclick="return confirm('¿Quiere Eliminar el Producto?')" class=" text-white btn bg-red-800">Eliminar</button>
                                </form>
                                <!-- Button trigger modal -->
{{-- <button type="button" class="text-white btn bg-red-800" data-toggle="modal" data-target="#exampleModal">
    Eliminar
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿SEGURO QUIERE ELIMINAR?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form action="{{route('admin.productos.destroy', $producto)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" onclick="return confirm('¿Quiere Eliminar el Producto?')" class=" text-white btn bg-red-800">Eliminar</button>
        </form>
        </div>
      </div>
    </div>
  </div> --}}

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <form action="">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Cover photo</label>
                    <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                      <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                          <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                          <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span>Upload a file</span>
                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                          </label>
                          <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                      </div>
            </form> --}}
        </div>

        {{-- <div class="card-footer">
            {{$productos->links()}}
        </div> --}}

    </div>
@stop
{{--
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop--}}

@section('js')

    {{-- <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/jquery/jquery.js"></script> --}}
@stop
