@extends('adminlte::page')
@section('title', 'SublimeFire-Admin')

@section('content_header')
    <h1>Lista de Productos</h1>
@stop

@section('content')
    @livewire('admin.producto-index')
@stop
{{--
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop--}}

@section('js')

    {{-- <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/jquery/jquery.js"></script> --}}
@stop
