@extends('adminlte::page')

@section('title', 'Actualizar producto')

@section('content_header')
<h1>Actualizar producto</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!!Form::model($product, ['route' => ['admin.products.update', $product], 'autocomplete'=> 'off', 'files' => true, 'method' => 'PUT']) !!}
        @include('admin.products.partials.form')

        {!! Form::submit('Actualizar producto', ['class'=> 'btn btn-success']) !!}
        {!!Form::close([]) !!}
    </div>
</div>
@stop

@section('css')
<style>
    .image-wrapper {
        position: relative;
        padding-bottom: 56.25%;
    }

    .image-wrapper img {
        position: absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>
@stop

@section('js')
<script
    src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}">
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>

<script>
    $(document).ready( function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });

    ClassicEditor
    .create( document.querySelector( '#extract' ) )
    .catch( error => {
    console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '#body' ) )
    .catch( error => {
    console.error( error );
    } );

    document.getElementById('file').addEventListener('change',changeImage );
    function changeImage(event) {
        const file = event.target.files[0];

        const reader = new FileReader();

        reader.onload = (event) => {
            document.getElementById('picture').setAttribute('src',event.target.result)
        };

        reader.readAsDataURL(file)
    }
</script>
@endsection
