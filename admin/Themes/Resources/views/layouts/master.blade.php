@extends('layouts.main')

@section('main-styles')
    <link rel="stylesheet" href="{{ asset('css/themes.css') }}">
    @yield('styles')
@endsection

@section('main-title')
    @yield('title', $title ?? '<title>Module Themes</title>')
@endsection

@section('main-layout')
    @yield('content', $content ?? '')
@endsection

@section('main-scripts')
    <script src="{{ asset('js/themes.js') }}"></script>
    @yield('scripts')
@endsection
