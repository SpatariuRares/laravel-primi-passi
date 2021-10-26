<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

    </head>
    <body>
        <h1>homepage</h1>
        <ul>
            <li><a href="{{route('homepage')}}">HomePage</a></li>
            <li><a href="{{route('route')}}">Route</a></li>
        </ul>
        {{$name ." ". $surname}}
    </body>
</html>
