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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- WebFont.js -->
    <link rel="preload" href="{{ asset('assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2') }}" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2') }}" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2') }}" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('assets/fonts/wolmart87d5.ttf?png09e') }}" as="font" type="font/ttf" crossorigin="anonymous">
    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo1.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slider.css') }}">

      <script>
          WebFontConfig = {
              google: { families: ['Poppins:400,500,600,700,800'] }
          };
          (function (d) {
              var wf = d.createElement('script'), s = d.scripts[0];
              wf.src = "{{ asset('assets/js/webfont.js') }}";
              wf.async = true;
              @include('shared.header')  s.parentNode.insertBefore(wf, s);
          })(document);
      </script>
    </head>

        @yield('content')

        @include('shared.footer')
