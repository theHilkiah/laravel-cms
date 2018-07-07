@php ob_start('ob_gzhandler') @endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title or config('app.name') }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
        @yield('main-styles')
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        @stack('styles')
    </head>
    <body>
        <header>
            @include('includes.admin.navbar')
        </header>
        <main>
            @yield('main-layout')
        </main>
        <footer>
            @include('includes.admin.footer')
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
        @yield('main-scripts')
        <script src="{{ asset('js/admin.js') }}"></script>
        @stack('scripts')
    </body>
</html>
@php print minify_html(ob_get_clean()) @endphp
