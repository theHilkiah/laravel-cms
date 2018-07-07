@extends('layouts.main')

@section('main-styles')
    <link rel="stylesheet" href="{{ asset('css/security.css') }}">
    @yield('styles')
@endsection

@section('main-title')
    @yield('title', $title ?? '<title>Module Security</title>')
@endsection

@section('main-layout')
    @yield('content', $content ?? '')
@endsection

@section('main-scripts')
    <script src="{{ asset('js/security.js') }}"></script>
    @yield('scripts')
@endsection
