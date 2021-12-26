@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1>{{$user->name }}</h1>
@stop

@section('content')
<p>Bienvenido al panel de administracion</p>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
    console.log('Hi!');
</script>
@stop
