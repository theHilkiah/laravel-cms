@extends('layouts.app')
@section('styles')
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
@endsection
@push('styles')
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
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
            align-items: center;
            justify-content: center;
        }

        .card {
            display: inline-block;
            min-width: 200px;
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
        .homepage-hero-module {
            border-right: none;
            border-left: none;
            position: relative;
        }
        .no-video .video-container video,
        .touch .video-container video {
            display: none;
        }
        .no-video .video-container .poster,
        .touch .video-container .poster {
            display: block !important;
        }
        .video-container {
            position: relative;
            bottom: 0%;
            left: 0%;
            height: 100%;
            width: 100%;
            overflow: hidden;
            background: #000;
        }
        .video-container .poster img {
            width: 100%;
            bottom: 0;
            position: absolute;
        }
        .video-container .filter {
            z-index: 100;
            position: absolute;
            background: rgba(0, 0, 0, 0.4);
            width: 100%;
        }
        .video-container video {
            position: absolute;
            z-index: 0;
            bottom: 0;
        }
        .video-container video.fillWidth {
            width: 100%;
        }
        #myVidBG {
            position: fixed !important;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }
        .topmost{
            z-index: 999;
        }
        .bg-trans{
            background: rgba(255,255,255,.255);
        }

    </style>
@endpush
@section('content')
<div class="homepage-hero-module" id="myVidBG">
    <div class="video-container">
        <div class="filter"></div>
        <video autoplay loop class="fillWidth">
            <source src="/mda/white-space/white-space.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src="PATH_TO_WEBM" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
        <div class="poster hidden">
            <img src="/mda/white-space/white-space.jpg" alt="">
        </div>
    </div>
</div>
<div class="container topmost">
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-warning" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <div class="content">
            <div class="links card-boxes flex-center">
                @php $content = ['WebPages', 'Themes', 'Media'] @endphp
                @foreach ($modules_list->only('Media', 'WebPages', 'Themes')->keys() as $mod)
                    <a class="card card-box" href="/admin/{{ strtolower($mod) }}">
                        {{ $mod }}
                    </a>
                @endforeach
            </div>
            <hr>
            <div class="links card-boxes flex-center">
                @php $content = ['WebPages', 'Themes', 'Media'] @endphp
                @foreach ($modules_list->except('Media', 'WebPages', 'Themes', 'Account', 'Security', 'Settings')->keys() as $mod)
                    <a class="card card-box" href="/admin/{{ strtolower($mod) }}">
                        {{ $mod }}
                    </a>
                @endforeach
            </div>
            <hr>
            <div class="links card-boxes flex-center">
                @php $content = ['WebPages', 'Themes', 'Media'] @endphp
                @foreach ($modules_list->only('Account', 'Security', 'Settings')->keys() as $mod)
                    <a class="card card-box" href="/admin/{{ strtolower($mod) }}">
                        {{ $mod }}
                    </a>
                @endforeach
            </div>
            <hr>
            @if (!auth()->user()->settings->contains('default_module'))
                <form class="form-inline" action="/auth/account/settings" method="post">
                @csrf
                <div class="input-group input-group-sm my-3 mx-auto">
                {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <input type="checkbox" name="name" value="default_module" aria-label="Checkbox button for following text input">
                        </span>
                        <span class="input-group-text">Make the following module my default next time I log in: </span>
                    </div>
                    <select name="value" class="form-control" aria-label="Module to be set as default">
                        <option value="">(Select)</option>
                        @foreach ($modules_list->keys() as $mod)
                        <option value="/admin/{{ strtolower($mod) }}">{{ strtoupper($mod) }}</option>
                    @endforeach
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit"><i class="fa fa-save"></i></button>
                    </div>
                </div>
            </form>
            @endif
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    //jQuery is required to run this code
$( document ).ready(function() {

    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

});

function scaleVideoContainer() {

    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);

}

function initBannerVideoSize(element){

    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
    windowHeight = $(window).height() + 5,
    videoWidth,
    videoHeight;

    // console.log(windowHeight);

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');

        $(this).width(windowWidth);

        if(windowWidth < 1000){
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

            $(this).width(videoWidth).height(videoHeight);
        }

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

    });
}
</script>
@endpush
