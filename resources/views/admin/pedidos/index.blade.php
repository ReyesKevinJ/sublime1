@extends('adminlte::page')
@section('title', 'SublimeFire-Admin')

@section('content_header')
    <h1>Pedidos a Realizar</h1>
@stop

@section('content')
    @livewire('admin.pedido-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
