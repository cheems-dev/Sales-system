<div class="card">
    <div class="card-header">
        <input type="text" wire:model="search" class="form-control" placeholder="&#xF002; Ingrese el nombre, marca o ID de un producto a buscar">
    </div>

    @if ($products->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Marca</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->brand}}</td>
                        <td>{{$product->stock}}</td>
                        <td>${{$product->price}}</td>
                        <td with='10px'>
                            <a class="btn btn-warning btn-sm" href="{{route('admin.products.edit',$product)}}">Editar</a>
                        </td>
                        <td with='10px'>
                            <form action="{{route('admin.products.destroy',$product)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$products->links('pagination::bootstrap-4')}}
        </div>
    @else
    <div class="card-body">
        <strong>Opps no encontramos ninguna coincidencia!!! 😞</strong>
    </div>
    @endif
</div>
