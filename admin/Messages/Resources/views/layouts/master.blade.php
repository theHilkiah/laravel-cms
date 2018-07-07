@extends('layouts.main')

@section('main-styles')
    <link rel="stylesheet" href="{{ asset('css/messages.css') }}">
    @yield('styles')
@endsection

@section('main-title')
    @yield('title', $title ?? '<title>Module Messages</title>')
@endsection

@section('main-layout')
    @yield('content', $content ?? '')
@endsection

@section('main-scripts')
    <script src="{{ asset('js/messages.js') }}"></script>
    @yield('scripts')
@endsection
