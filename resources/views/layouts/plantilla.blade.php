<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  >
  <link
    href="{{ asset('css/app.css') }}"
    rel="stylesheet"
  >
  <title>@yield('title')</title>
</head>

<body>

  @include('layouts.partials.header')
  <main>
    @yield('content')
  </main>
  @include('layouts.partials.footer')

</body>

</html>
