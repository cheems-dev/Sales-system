<div class="card">
    <div class="card-header">
        <input type="text" wire:model="search" class="form-control"
            placeholder="&#xF002; Ingrese el nombre, marca o ID de un producto a buscar">
    </div>
    @if ($users->count())
    <div class="card-body">
        <table class="table table-striped ">
            <thead class="table-dark">
                <tr class="text-gray-800 border border-b-0">
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">Nombre</th>
                    <th class="px-4 py-3">Telefono</th>
                    <th class="px-4 py-3">Dirección</th>
                    <th class="px-4 py-3" colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user )
                <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                    <td class="px-4 py-4">{{$user->id}}</td>
                    <td class="px-4 py-4">{{$user->name}}</td>
                    <td class="px-4 py-4">{{$user->phone}}</td>
                    <td class="px-4 py-4">{{$user->address}}</td>
                    <td width="10px" class="px-4 py-4">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit', $user)}}">Editar</a>
                    </td>
                    <td width="10px" class="px-4 py-4">
                        <form action="{{route('admin.users.destroy', $user)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$users->links('pagination::bootstrap-4')}}
    </div>
    @else
    <div class="card-body">
        <strong>Opps no encontramos ninguna coincidencia!!! 😞</strong>
    </div>
    @endif
</div>
