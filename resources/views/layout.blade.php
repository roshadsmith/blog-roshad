<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        {!! style_ts('/css/app.css') !!}
        <link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
        <title>Roshad's Custom Blog</title>
    </head>
    <body id="posts-index">
        <div id="app">
            @include('layout.sidebar')
            <main>
                @yield('content')            
            </main>
        </div>
        {!! script_ts('/css/app.css') !!}
    </body>
</html>