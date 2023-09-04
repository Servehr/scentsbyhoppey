<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <title>{{ config('app.name', 'Scents Hoppey') }}</title>
      <link rel="icon" type="image/png" href="assets/images/icons/favicon.png') }}">
      <meta charset="utf-8">
      <meta name="keywords" content="Scents Hoppey Perfume" />
      <meta name="description" content="Perfume NiceSmeell scents smell">
      <meta name="author" content="D-THEMES">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Scripts -->
      <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>
  <body>

    <div class="container" style="margin-top:100px;">
        @yield('content')
    </div>

  </body>
</html>
