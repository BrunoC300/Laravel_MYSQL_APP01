<!DOCTYPE html>
<html lang="pt">
    <head>
       <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    </head>

    <body>
        @include('site.layouts.partials.topo')
        @yield('conteudo')
    </body>
</html> 