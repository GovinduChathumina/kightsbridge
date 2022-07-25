<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inventoty Management - {{ (Route::currentRouteName()) ? ' - '.ucwords(Route::currentRouteName()) : '' }}</title>

    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
    .container, .container-fluid { /* Set width to your desired site width */ min-width: 1170px; }
    </style>
    @yield('css')
    </head>
  <body class="font-sans m-0 p-0 text-sm flex flex-col">
    @yield('content')

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    @yield('js')
  </body>
</html>
