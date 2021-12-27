@extends('adminlte::page')

@section('title', 'Facturas')

@section('content_header')
<h1>Facturas</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>{{session('info')}}</strong>
</div>
@endif

    @livewire('admin.details-index')
@stop
