<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title or config('app.name') }}</title>
        @yield('base-styles')
        @stack('styles')
    </head>
    <body>
        @yield('base-layout')

        @yield('base-scripts')
        @stack('scripts')
    </body>
</html>
