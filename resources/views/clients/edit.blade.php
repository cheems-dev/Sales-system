@extends('layouts.plantilla')

@section('title', 'Actualizar Usuario')

@section('content')

  <div class="flex justify-center items-center w-full py-12 bg-blue-100">
    <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
      <h1 class="block h-full text-center text-gray-800 text-2xl font-bold mb-6">Actualizar datos de usuario</h1>
      <p class="text-red-600 flex justify-end"><a href="{{ route('clients.index') }}">Volver atras</a></p>

      <form
        action="{{ route('clients.update', $user) }}"
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
            value="{{ old('name', $user->name) }}"
          >
          @error('name')
            <small>*{{ $message }}</small>
          @enderror
        </div>

        <div class="flex flex-col mb-4">
          <label
            class="mb-2 font-bold text-lg text-gray-900"
            for="email"
          >Email</label>
          <input
            class="border py-2 px-3 text-grey-800"
            type="email"
            name="email"
            id="email"
            value="{{ old('email', $user->name) }}"
          >
          @error('email')
            <small>*{{ $message }}</small>
          @enderror
        </div>


        <div class="flex flex-col mb-4">
          <label
            class="mb-2 font-bold text-lg text-gray-900"
            for="password"
          >Password:</label>
          <input
            class="border py-2 px-3 text-grey-800"
            type="password"
            name="password"
            id="password"
            value="{{ old('password', $user->password) }}"
          >
          @error('password')
            <small>*{{ $message }}</small>
          @enderror
        </div>

        <div class="flex flex-col mb-4">
          <label
            class="mb-2 font-bold text-lg text-gray-900"
            for="phone"
          >Telefono:</label>
          <input
            class="border py-2 px-3 text-grey-800"
            type="text"
            name="phone"
            id="phone"
            value="{{ old('phone', $user->phone) }}"
          >
          @error('categoria')
            <small>*{{ $message }}</small>
          @enderror
        </div>

        <div class="flex flex-col mb-4">
          <label
            class="mb-2 font-bold text-lg text-gray-900"
            for="address"
          >Direccion:</label>
          <input
            class="border py-2 px-3 text-grey-800"
            type="text"
            name="address"
            id="address"
            value="{{ old('address', $user->address) }}"
          >
          @error('address')
            <small>*{{ $message }}</small>
          @enderror
        </div>

        <div class="flex justify-center">
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
@endsection
