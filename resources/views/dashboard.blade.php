<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="container py-3">
      <a href="{{ route('products.create') }}">
        <button class="py-1 px-6 text-white rounded-lg bg-green-500 shadow-lg block md:inline-block">
          Crear producto
        </button>
      </a>
    </div>
    <div class="px-4 py-2 sm:px-0">
      <div class="container">
        <div class="grid grid-cols-3 gap-6">

          @foreach ($products as $product)
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
              <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
                <div
                  class="w-1/3 bg-cover"
                  style="background-image: url('https://images.unsplash.com/photo-1591886892231-62ce71610839?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1896&q=80')"
                >
                </div>
                <div class="w-2/3 p-4">
                  <form
                    action="{{ route('products.destroy', $product) }}"
                    method="post"
                  >
                    <a
                      class="px-4 mr-2 py-1 text-sm text-white bg-green-400 rounded"
                      href="{{ route('products.edit', $product) }}"
                    >Editar </a>
                    @csrf
                    @method('delete')
                    <button
                      type="submit"
                      class="px-4 py-1 text-sm text-white bg-red-400 rounded"
                    >
                      Eliminar
                    </button>
                  </form>

                  <h1 class="text-gray-900 font-bold text-2xl">
                    {{ $product->name }}
                  </h1>
                  <span>Marca: {{ $product->brand }}</span>



                  <p class="mt-2 text-gray-600 text-sm">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
                    not only five centuries, but also the leap into electronic typesetting, remaining essentially
                    unchanged.
                  </p>
                  <p class="text-right mt-2 text-gray-600 text-sm">Stock: {{ $product->stock }}</p>
                  <div class="flex item-center mt-2">
                    <svg
                      class="w-5 h-5 fill-current text-gray-700"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                      />
                    </svg>
                    <svg
                      class="w-5 h-5 fill-current text-gray-700"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                      />
                    </svg>
                    <svg
                      class="w-5 h-5 fill-current text-gray-700"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                      />
                    </svg>
                    <svg
                      class="w-5 h-5 fill-current text-gray-500"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                      />
                    </svg>
                    <svg
                      class="w-5 h-5 fill-current text-gray-500"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                      />
                    </svg>
                  </div>
                  <div class="flex item-center justify-between mt-3">
                    <h1 class="text-gray-700 font-bold text-xl">$ {{ $product->price }}</h1>
                    <button
                      class="px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Comprar</button>
                  </div>
                </div>
              </div>

            </div>

          @endforeach
        </div>

      </div>
      <div class="pt-3">
        {{ $products->links() }}
      </div>

    </div>
    <!-- /End replace -->
  </div>

</x-app-layout>
