@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
<a href="{{route('admin.users.create')}}" class="btn btn-success btn-sm float-right">Agregar cliente</a>
<h1>Lista de clientes</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{session('info')}}</strong>
    </div>
@endif

    @livewire('admin.users-index')
@stop

