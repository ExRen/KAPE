<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Smart Anambas | @yield("title")</title> 


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Dosis|Lato|Merriweather|Oswald|Roboto+Condensed|Source+Serif+Pro|Teko|Yanone+Kaffeesatz" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    <div id="app">
        @include('nav.navbar')
        @include('nav.managenavbar')
        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>