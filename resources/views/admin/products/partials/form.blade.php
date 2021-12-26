<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Ingrese el nombre de la posts']) !!}
    @error('name')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control','placeholder' => 'Ingrese el slug del producto',
    'readonly']) !!}
    @error('slug')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('brand', 'Marca') !!}
    {!! Form::text('brand', null, ['class' => 'form-control','placeholder' => 'Ingrese la marca del producto']) !!}
    @error('brand')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    <div class="row">
        <div class="col">
            {!! Form::label('stock', 'Cantidad') !!}
            {!! Form::number('stock', null, ['class' => 'form-control']) !!}
            @error('stock')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col">
            {!! Form::label('price', 'Precio') !!}
            {!! Form::number('price', null, ['class' => 'form-control']) !!}
            @error('stock')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

</div>
<div class="row">
    <div class="col mb-3">
        <div class="image-wrapper">
            @isset ($product->image)
                <img id="picture" src="{{Storage::url($product->image->url)}}" >
            @else
                <img id="picture" src="https://media.istockphoto.com/photos/lady-on-shopping-tour-in-front-of-shopping-stores-picture-id608623420" alt="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen del producto') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            @error('file')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
   {!! Form::label('extract', 'Extracto: ') !!}
   {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

   @error('extract')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post: ') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    @error('body')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
