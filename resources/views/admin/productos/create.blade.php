
@extends('adminlte::page')
@section('title', 'SublimeFire-Admin')

@section('content_header')
    <h1>Cargar Producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route'=>'admin.productos.store','autocomplet'=>'off','files'=>'true']) !!}
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
            {!! Form::label('descripcion', 'Descripción') !!}
            {!! Form::textarea('descripcion', null, ['class'=>'form-control','placeholder'=>'Ingresar Descripción de Producto']) !!}
            @error('descripcion')
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
            {!! Form::select('color_id', $color,null,['class'=>'form-control' ,'placeholder'=>'Seleccionar Color']) !!}
            @error('color_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
            {!! Form::label('tamaño_id','Tamaño') !!}
            {!! Form::select('tamaño_id', $tamaño,null,['class'=>'form-control' ,'placeholder'=>'Seleccionar Tamaño']) !!}
            @error('tamaño_id')
                <span class="taxt-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="row text-center mb-5">
                <img id="picture" class="img-fluid" src="/img/logo2.png" alt="">
            </div>
            <div class="col">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Cargar Imagen</label>
                    <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                      <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                          <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                          <label for="image" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span>Upload a file</span>
                            <input id="image" name="image" type="file" class="sr-only" accept="image/*">
                          </label>

                        </div>
                        @error('image')
                        <span class="taxt-danger">{{$menssage}}</span>
                        @enderror
                      </div>
                </div>

        <div class="mt-3">
            {!! Form::submit('Guardar',['class'=>'btn bg-sky-500 text-white'] ) !!}
        {!! Form::close() !!}
        </div>
        </div>
    </div>
@stop
@section('js')
    <script>
        $(document).ready(function(){

$('#image').change(function(e){

  let file= e.target.files[0];

  let reader= new FileReader();

  reader.onload= (event) => {

   $('#picture').attr('src', event.target.result)

  };

  reader.readAsDataURL(file);

})

});
    // $(document).getElementById("image").addEventListener('change',cambiarImagen);
    //     function cambiarImagen(event){
    //         var image= event.target.files[0];
    //         var reader= new FileReader();
    //         reader.onload = (event) => {
    //             document.getElementById("picture").setAttribute('src',evet.target.result);
    //         };
    //         reader.readAsDataURL(image);
    //     }
</script>
@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop --}}
{{--
@section('js')
    <script>
        document.getElementById("image").addEventListener('change',cambiarImagen);
        function cambiarImagen(event){
            var image= event.target.files[0];
            var reader= new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src',evet.target.result);
            };
            reader.readAsDataURL(image);
        }
    </script>
@stop --}}


