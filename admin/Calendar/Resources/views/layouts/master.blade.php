@extends('layouts.main')

@section('main-styles')
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
    @yield('styles')
@endsection

@section('main-title')
    @yield('title', $title ?? '<title>Module Calendar</title>')
@endsection

@section('main-layout')
    @yield('content', $content ?? '')
@endsection

@section('main-scripts')
    <script src="{{ asset('js/calendar.js') }}"></script>
    @yield('scripts')
@endsection
