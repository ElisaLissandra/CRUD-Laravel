<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
       <h1>Testando routes com views</h1>
       <p>Id: {{ $id }}</p>
       <p>Nome: {{ $nome }}</p>
       <a href="{{ route('home-index') }}"> Clique aqui </a>
    </body>
</html>
