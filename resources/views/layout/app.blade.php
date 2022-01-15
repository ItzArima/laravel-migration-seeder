<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Custom CSS -->
        @yield('css')
    </head>
    <body>
        <!-- Header -->
        @include('partials.header')

        <!-- Main -->
        @yield('content')

        <!-- Footer -->
        @include('partials.footer')
    </body>
</html>