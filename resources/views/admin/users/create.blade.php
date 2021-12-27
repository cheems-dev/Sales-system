@extends('adminlte::page')

@section('title', 'Crear un nuevo un usuario')

@section('content_header')
<h1>Crear cliente</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!!Form::open(['route' => 'admin.users.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Ingrese el nombre del cliente']) !!}

                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, ['class' => 'form-control','placeholder' => 'Ingrese un email']) !!}
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::password('password', ['class' => 'form-control','placeholder' => 'Contraseña minimo de 8 caracteres']) !!}

                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('phone', 'Teléfono') !!}
                {!! Form::text('phone', null, ['class' => 'form-control']) !!}

                @error('phone')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('address', 'Dirección') !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}

                @error('address')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        {!! Form::submit('Crear cliente', ['class'=> 'btn btn-success']) !!}
        {!!Form::close([]) !!}
    </div>
</div>
@stop
