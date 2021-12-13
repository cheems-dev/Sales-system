<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Facturas') }}
    </h2>
  </x-slot>
  <div class=" max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class=" py-5">
      <div class='overflow-x-auto w-full'>
        <table
          class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'
        >
          <thead class="bg-gray-900">
            <tr>
              <th class="font-semibold text-sm uppercase px-6 py-4 text-white">ID</th>
              <th class="font-semibold text-sm uppercase px-6 py-4 text-white">Cliente</th>
              <th class="font-semibold text-sm uppercase px-6 py-4 text-white">Producto</th>
              <th class="font-semibold text-sm uppercase px-6 py-4 text-white">Fecha</th>
              <th class="font-semibold text-sm uppercase px-6 py-4 text-white">Cantidad</th>
              <th class="font-semibold text-sm uppercase px-6 py-4 text-white">Descargar</th>

            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            @foreach ($details as $detail)
              <tr class="bg-emerald-200">
                <td class="px-6 py-4">{{ $detail->id }}</td>
                <td class="px-6 py-4">{{ $detail->sale->user->name }}</td>
                <td class="px-6 py-4">{{ $detail->product->name }}</td>
                <td class="px-6 py-4">{{ $detail->sale->fecha }}</td>
                <td class="px-6 py-4">{{ $detail->quantity_total }}</td>
                <td class="px-6 py-4">
                  <a>PDF</a>
                </td>
              </tr>
            @endforeach
          </tbody>

        </table>
      </div>
    </div>
    <div class="pt-3">
      {{ $details->links() }}
    </div>

  </div>
</x-app-layout>
