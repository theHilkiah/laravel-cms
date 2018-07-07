@extends('layouts.base')
@section('base-styles')
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
@endsection
@section('base-layout')
@push('styles')
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            max-width: 1440px;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .card-boxes {
            display: -webkit-flex;
            -webkit-flex-wrap: wrap;
            display: flex;
            flex-wrap: wrap;
        }

        .card {
            display: inline-block;
            min-width: 250px;
        }

        .card-box {
            padding: 3rem 1rem !important;
            box-shadow: 1px 1px 1rem 1px;
            margin: 1rem;
            border: none;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
@endpush
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            {{ $title or config('app.name') }}
        </div>
    </div>
</div>
@endsection
