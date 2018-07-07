@extends('layouts.main')

@section('main-styles')
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    @yield('styles')
@endsection

@section('main-title')
    @yield('title', $title ?? '<title>Module Media</title>')
@endsection

@section('main-layout')
<div class="nav-scroller bg-white box-shadow">
    <nav class="nav nav-underline">
    <a class="nav-link active" href="#">Dashboard</a>
    <a class="nav-link" href="#">
        Friends
        <span class="badge badge-pill bg-light align-text-bottom">27</span>
    </a>
    <a class="nav-link" href="#">Explore</a>
    <a class="nav-link" href="#">Suggestions</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    </nav>
</div>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
    <div class="container-fluid py-3">
        <div class="card-deck">
            <div class="card">

            </div>
            <div class="card col-sm-6">
                @yield('content', $content ?? '')
            </div>
            <div class="card">

            </div>
        </div>
    </div>
@endsection

@section('main-scripts')
    <script src="{{ asset('js/media.js') }}"></script>
    @yield('scripts')
@endsection
