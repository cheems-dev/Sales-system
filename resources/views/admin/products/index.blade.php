@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
<a href="{{route('admin.products.create')}}" class="btn btn-success btn-sm float-right">Agregar nuevo producto</a>
<h1>Lista de productos</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>{{session('info')}}</strong>
</div>
@endif
    @livewire('admin.products-index')
@stop
