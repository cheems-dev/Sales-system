<nav class="container flex justify-around py-8 mx-auto bg-white">
  <div class="flex items-center">
    <h3 class="text-3xl  italic  normal-case text-opacity-75 font-medium text-indigo-900">TernoSexo</h3>
  </div>
  <!-- left header section -->
  <div class="items-center hidden space-x-8 lg:flex">
    <a
      href="{{ route('welcome') }}"
      class="text-gray-300 hover:bg-purple-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('welcome') ? 'bg-purple-700  text-white ' : '' }} "
      aria-current="page"
    >Tienda</a>
    <a
      href="{{ route('clients.index') }}"
      class="text-gray-300 hover:bg-purple-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('clients.*') ? 'bg-purple-700 text-white hover:text-white ' : '' }}"
    >Clientes</a>
    <a
      href="{{ route('details.index') }}"
      class="text-gray-300 hover:bg-purple-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('nosotros') ? 'bg-purple-700  text-white ' : '' }}"
    >Facturas</a>

  </div>
  <!-- right header section -->
  <div class="flex items-center  space-x-8">
    @if (Route::has('login'))
      <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
          <a
            href="{{ url('/dashboard') }}"
            class="text-sm text-gray-500 underline"
          >Dashboard</a>
        @else
          <a
            href="{{ route('login') }}"
            class="text-sm text-gray-500 underline"
          >Login</a>
          @if (Route::has('register'))
            <a
              href="{{ route('register') }}"
              class="ml-4 text-sm text-gray-500 underline"
            >Register</a>
          @endif
      @endif
    </div>
    @endif
    </div>
  </nav>
