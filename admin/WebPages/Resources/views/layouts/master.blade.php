@extends('layouts.main')

@section('main-styles')
    <link rel="stylesheet" href="{{ asset('css/webpages.css') }}">
    @yield('styles')
@endsection

@section('main-title')
    @yield('title', $title ?? '<title>Module WebPages</title>')
@endsection

@section('main-layout')
    @yield('content', $content ?? '')
@endsection

@section('main-scripts')
    <script src="{{ asset('js/webpages.js') }}"></script>
    @yield('scripts')
@endsection
