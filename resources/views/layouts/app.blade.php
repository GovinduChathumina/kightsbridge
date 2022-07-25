<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    {{-- <link href="/css/common.css?t={{ time() }}" rel="stylesheet"> --}}
    <style>
    .container, .container-fluid { /* Set width to your desired site width */ min-width: 1170px; }
    </style>
    @yield('css')
</head>
      <body class="font-sans m-0 p-0 text-sm flex flex-col">
        @include('layouts.nav')
        <div class="p-4 pt-4em">
          @yield('content')
        </div>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('/js/goodReceived.js') }}" defer></script>
    <script src="{{ asset('/js/purchaseOrder.js') }}" defer></script>
    <script src="{{ asset('/js/returnNote.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.min.js" defer></script>
    @yield('js')
</body>
</html>
