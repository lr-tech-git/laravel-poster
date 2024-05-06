@extends('layouts.app-auth')

<link rel="stylesheet" href="/css/rateyo.css">
<link rel='stylesheet' href='/css/unite-gallery.css' type='text/css' />
@section('content')

    <!-- Content wrapper -->
    <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1 mt-3"><span class="text-muted fw-light">{{ __("Complaints") }}/</span> {{ __("Details") }}</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    @if($complaint->canEdit(auth()->id()))
                        <a href="{{ route('complaints.edit', ['complaint' => $complaint->id]) }}" class="btn btn-primary">{{ __("Edit") }}</a>
                    @endif
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif

            <div class="card g-3 mt-5">
                <div class="card-body row g-3">
                    <div class="col-lg-8">
                        <div class="d-flex justify-content-between align-items-center flex-wrap mb-2 gap-1">
                            <div class="me-1">
                                <h5 class="mb-1">{{ $complaint->title }}</h5>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="badge bg-label-primary">{{ $complaint->getCategoryName() }}</span>
                                <i class='bx bx-share-alt bx-sm mx-4'></i>
                            </div>
                        </div>
                        <div class="card academy-content shadow-none border">
                            <div class="card-body">
                                {!! $complaint->getAbout() !!}

                                @if($complaint->files)
                                    <div id="gallery-block" style="display:none;">
                                        @foreach($complaint->files as $file)
                                            <img alt="Preview Image 1"
                                                 src="{{ $file->getFileAssets() }}"
                                                 data-image="{{ $file->getFileAssets() }}"
                                                 data-description="Preview Image 1 Description">
                                        @endforeach
                                    </div>
                                @endif

                                @if($tags = $complaint->tags)
                                    <hr class="my-4">
                                    @foreach($tags as $tag)
                                        <a>#{{ $tag->tag }} </a>
                                    @endforeach
                                @endif

                                @if($author = $complaint->author)
                                    <hr class="my-4">
                                    <h5>{{ __("Author") }}</h5>
                                    <div class="d-flex justify-content-start align-items-center user-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-2">
                                                <img src="{{ $author->getImgSrc() }}" alt="Avatar" class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="{{ route('profile.show', ['id' => $author->id]) }}">
                                                <span class="fw-medium">{{ $author->getFullName() }}</span>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        @include('complaints._comments')

                    </div>

                    <div class="col-lg-4">
                        <iframe
                            width="100%"
                            height="450"
                            style="border:0"
                            loading="lazy"
                            allowfullscreen
                            referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBtveTF1L2L7qyanfBR71a0bEFBwoHek_Q&q=NewYork">
                        </iframe>

                        <p class="d-flex align-items-center"><b>{{ $complaint->address }}</b></p>

                        <p class="d-flex align-items-center" style="margin-top: 20px"><i class="bx bx-time-five me-2"></i>{{ $stats['remain_count_text'] }}</p>
                        <div class="progress mb-4" style="height: 8px">
                            <div class="progress-bar" role="progressbar"  style="width: {{ $stats['percent_review'] }}%"  aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="card">
                            @if(!auth()->check())
                                {{ __("You need to be logged in to vote") }}
                                <a href="{{ route('login') }}" class="btn btn-primary">{{ __("Login") }}</a>
                            @elseif($myReview = $complaint->myReview(auth()->id()))
                                <h5 class="card-header">{{ __("Your vote") }}</h5>
                                <div id="my-rate" class="my-star-ratings" style="padding-left: 20px;margin-bottom: 20px;" data-rateyo-full-star="true" data-rate="{{ $myReview->rate }}"></div>
                            @else
                                <form action="{{ route('complaints.review', ['id' => $complaint->id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" id="rate" name="rate">
                                    <h5 class="card-header">{{ __("Vote") }}</h5>
                                    <div class="card-body">
                                        <div id="rateYo" class="my-star-ratings" style="float:left" data-rateyo-full-star="true"></div>
                                        <button class="btn btn-primary" style="float:right">{{ __("Confirm") }}</button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('scripts')
    <script type='text/javascript' src='/js/gallery/ug-common-libraries.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-functions.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-thumbsgeneral.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-thumbsstrip.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-touchthumbs.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-panelsbase.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-strippanel.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-gridpanel.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-thumbsgrid.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-tiles.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-tiledesign.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-avia.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-slider.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-sliderassets.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-touchslider.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-zoomslider.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-video.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-gallery.js'></script>
    <!--	<script type='text/javascript' src='unitegallery/js/ug-lightbox.js'></script>-->
    <!--	<script type='text/javascript' src='unitegallery/js/ug-carousel.js'></script>-->
    <script type='text/javascript' src='/js/gallery/ug-api.js'></script>
    <script type='text/javascript' src='/js/gallery/ug-theme-default.js'></script>

    <script>
        $("#rateYo").rateYo()
            .on("rateyo.set", function (e, data) {
                console.log(data.rating)
                $("#rate").val(data.rating)
            });

        if ($("#my-rate").length) {
            let rate = $("#my-rate").data('rate')
            $("#my-rate").rateYo({
                rating: rate,
                readOnly: true
            });
        }

        $(document).ready(function() {
            if ($("#gallery-block").length) {
                $("#gallery-block").unitegallery();
            }
        })
    </script>
@endsection
<link rel="stylesheet" href="/css/app-academy.css">

<style>
    body{
        margin-top:20px;
        background:#ebeef0;
    }

    .img-sm {
        width: 46px;
        height: 46px;
    }

    .panel {
        box-shadow: 0 2px 0 rgba(0,0,0,0.075);
        border-radius: 0;
        border: 0;
        margin-bottom: 15px;
    }

    .panel .panel-footer, .panel>:last-child {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    .panel .panel-heading, .panel>:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .panel-body {
        padding: 25px 20px;
    }


    .media-block .media-left {
        display: block;
        float: left
    }

    .media-block .media-right {
        float: right
    }

    .media-block .media-body {
        display: block;
        overflow: hidden;
        width: auto;
        padding-left: 10px;
    }

    .middle .media-left,
    .middle .media-right,
    .middle .media-body {
        vertical-align: middle
    }

    .thumbnail {
        border-radius: 0;
        border-color: #e9e9e9
    }

    .tag.tag-sm, .btn-group-sm>.tag {
        padding: 5px 10px;
    }

    .tag:not(.label) {
        background-color: #fff;
        padding: 6px 12px;
        border-radius: 2px;
        border: 1px solid #cdd6e1;
        font-size: 12px;
        line-height: 1.42857;
        vertical-align: middle;
        -webkit-transition: all .15s;
        transition: all .15s;
    }
    .text-muted, a.text-muted:hover, a.text-muted:focus {
        color: #acacac;
    }
    .text-sm {
        font-size: 0.9em;
    }
    .text-5x, .text-4x, .text-5x, .text-2x, .text-lg, .text-sm, .text-xs {
        line-height: 1.25;
    }

    .btn-trans {
        background-color: transparent;
        border-color: transparent;
        color: #929292;
    }

    .btn-icon {
        padding-left: 9px;
        padding-right: 9px;
    }

    .btn-sm, .btn-group-sm>.btn, .btn-icon.btn-sm {
        padding: 5px 10px !important;
    }

    .mar-top {
        margin-top: 15px;
    }
</style>
