<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Editar producto') }}
    </h2>
  </x-slot>
  <div class="flex justify-center items-center w-full py-20 bg-blue-100">
    <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
      <h1 class="block h-full text-center text-gray-800 text-2xl font-bold mb-6">Actualizar producto</h1>
      <p class="text-red-600 flex justify-end"><a href="{{ route('dashboard') }}">Volver atras</a></p>

      <form
        action="{{ route('products.update', $product) }}"
        method="POST"
      >
        @csrf
        @method('put')

        <div class="flex flex-col mb-4">
          <label
            class="mb-2 font-bold text-lg text-gray-900"
            for="name"
          >Nombre</label>
          <input
            class="border py-2 px-3 text-grey-800"
            type="text"
            name="name"
            id="name"
            value="{{ old('name', $product->name) }}"
          >
          @error('name')
            <small>*{{ $message }}</small>
          @enderror
        </div>

        <div class="flex flex-col mb-4">
          <label
            class="mb-2 font-bold text-lg text-gray-900"
            for="brand"
          >Marca:</label>
          <input
            class="border py-2 px-3 text-grey-800"
            type="text"
            name="brand"
            id="brand"
            value="{{ old('brand', $product->brand) }}"
          >
          @error('brand')
            <small>*{{ $message }}</small>
          @enderror
        </div>

        <div class="flex flex-wrap -mx-3 mb-2">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
              for="stock"
            >
              Stock
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="stock"
              type="number"
              name="stock"
              step="any"
              placeholder="200"
              value="{{ old('stock', $product->stock) }}"
            >
            @error('stock')
              <small>*{{ $message }}</small>
            @enderror
          </div>

          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
              for="price"
            >
              Precio
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="price"
              type="number"
              name="price"
              step=0.01
              placeholder="54.70"
              value="{{ old('price', $product->price) }}"
            >
            @error('price')
              <small>*{{ $message }}</small>
            @enderror

          </div>

        </div>

        <div class="flex justify-center pt-9">
          <button
            class=" py-3 px-6 text-white rounded-lg bg-green-500 shadow-lg "
            type="submit"
          >
            Guardar
          </button>
        </div>
      </form>
    </div>
  </div>
</x-app-layout>
