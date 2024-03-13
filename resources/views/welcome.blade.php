<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Laravel Task and Project Manager
            </div>
            <div class="links">
                <a href="{{ url('/proyectos') }}">Proyectos</a>
                <a href="{{ url('/tareas') }}">Tareas</a>
            </div>
        </div>
    </div>
</body>
</html>
