@extends('layouts.main')

@section('main-styles')
    <link rel="stylesheet" href="{{ asset('css/settings.css') }}">
    @yield('styles')
@endsection

@section('main-title')
    @yield('title', $title ?? '<title>Module Settings</title>')
@endsection

@section('main-layout')
    @yield('content', $content ?? '')
@endsection

@section('main-scripts')
    <script src="{{ asset('js/settings.js') }}"></script>
    @yield('scripts')
@endsection
