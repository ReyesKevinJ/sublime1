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
        @include('admin.productos.partials.forms')
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
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}
