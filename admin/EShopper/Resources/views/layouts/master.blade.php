@extends('layouts.main')

@section('main-styles')
    <link rel="stylesheet" href="{{ asset('css/eshopper.css') }}">
    @yield('styles')
@endsection

@section('main-title')
    @yield('title', $title ?? '<title>Module EShopper</title>')
@endsection

@section('main-layout')
    @yield('content', $content ?? '')
@endsection

@section('main-scripts')
    <script src="{{ asset('js/eshopper.js') }}"></script>
    @yield('scripts')
@endsection
