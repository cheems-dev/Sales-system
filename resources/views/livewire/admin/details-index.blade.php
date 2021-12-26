<div class="card">
        <div class="card-header">
            <input type="text" wire:model="search" class="form-control"
                placeholder="&#xF002; Ingrese el nombre, marca o ID de un producto a buscar">
        </div>
        @if ($details->count())
        <div class="card-body">
            <table class="table table-striped ">
                <thead class="table-dark">
                    <tr class="text-gray-800 border border-b-0">
                        <th class="px-4 py-3">ID.Producto</th>
                        <th class="px-4 py-3">Producto</th>
                        <th class="px-4 py-3">Cliente</th>
                        <th class="px-4 py-3">Fecha de compra</th>
                        <th class="px-4 py-3">Precio</th>
                        <th class="px-4 py-3">Cantidad Total</th>
                        <th class="px-4 py-3">Precio Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details as $detail)
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                      <td class="px-4 py-4">{{$detail->product->id}}</td>
                      <td class="px-4 py-4">{{$detail->product->name}}</td>
                        <td class="px-4 py-4">{{$detail->sale->user->name}}</td>
                        <td class="px-4 py-4">{{$detail->sale->fecha}}</td>
                        <td class="px-4 py-4">${{$detail->product->price}}</td>
                        <td class="px-4 py-4">{{$detail->quantity_total}}</td>
                        <td class="px-4 py-4">${{ number_format($detail->product->price * $detail->quantity_total) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$details->links('pagination::bootstrap-4')}}
        </div>
        @else
        <div class="card-body">
            <strong>Opps no encontramos ninguna coincidencia!!! 😞</strong>
        </div>
        @endif
    </div>
