@extends('layouts.plantilla')

@section('title', 'Clientes')

@section('content')


  <div class=" max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <!-- Replace with your content -->
    <h1 class="text-center text-4xl  mb-3">Clientes</h1>
    <div class="flex justify-end">
      <a href="{{ route('clients.create') }}">
        <button class="py-1 px-6 text-white rounded-lg bg-green-500 shadow-lg block md:inline-block">
          Añadir
        </button>
      </a>
    </div>
    <div class=" py-5">
      <div class='overflow-x-auto w-full'>
        <table
          class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'
        >
          <thead class="bg-gray-900">
            <tr>
              <th class="font-semibold text-sm uppercase px-6 py-4 text-white">Nombre</th>
              <th class="font-semibold text-sm uppercase px-6 py-4 text-white">Email</th>
              <th class="font-semibold text-sm uppercase px-6 py-4 text-white">Telefono</th>
              <th class="font-semibold text-sm uppercase px-6 py-4 text-white">Direccion</th>
              <th class="font-semibold text-sm uppercase px-6 py-4 text-white">Editar</th>
              <th class="font-semibold text-sm uppercase px-6 py-4 text-white">Borrar</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            @foreach ($users as $user)
              <tr class="bg-emerald-200">
                <td class="px-6 py-4">{{ $user->name }}</td>
                <td class="px-6 py-4">{{ $user->email }}</td>
                <td class="px-6 py-4">{{ $user->phone }}</td>
                <td class="px-6 py-4">{{ $user->address }}</td>
                <td class="px-6 py-4">
                  <a
                    href="{{ route('clients.edit', $user) }}"
                    class="px-4 py-1 text-sm text-white bg-blue-400 rounded"
                  >Edit</a>
                </td>
                <td class="px-6 py-4">
                  <form
                    action="{{ route('clients.destroy', $user) }}"
                    method="post"
                  >
                    @csrf
                    @method('delete')
                    <button
                      type="submit"
                      class="px-4 py-1 text-sm text-white bg-red-400 rounded"
                    >
                      Delete
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>

        </table>
      </div>
    </div>
    <div class="pt-3">
      {{ $users->links() }}
    </div>

  </div>


@endsection
