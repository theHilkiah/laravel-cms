@extends('layouts.main')

@section('main-styles')
    <link rel="stylesheet" href="{{ asset('css/newsletter.css') }}">
    @yield('styles')
@endsection

@section('main-title')
    @yield('title', $title ?? '<title>Module Newsletter</title>')
@endsection

@section('main-layout')
    @yield('content', $content ?? '')
@endsection

@section('main-scripts')
    <script src="{{ asset('js/newsletter.js') }}"></script>
    @yield('scripts')
@endsection
