@extends('layouts.main')

@section('main-styles')
    <link rel="stylesheet" href="{{ asset('css/account.css') }}">
    @yield('styles')
@endsection

@section('main-title')
    @yield('title', $title ?? '<title>Module Account</title>')
@endsection

@section('main-layout')
    @yield('content', $content ?? '')
@endsection

@section('main-scripts')
    <script src="{{ asset('js/account.js') }}"></script>
    @yield('scripts')
@endsection
