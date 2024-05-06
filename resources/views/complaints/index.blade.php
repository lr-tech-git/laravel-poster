@extends('layouts.app-auth')

@section('content')


    <!-- Content wrapper -->
    <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1 mt-3"><span class="text-muted fw-light">{{ __("Home") }} /</span> {{ __("Complaint") }}</h4>
                </div>
                @if(auth()->check())
                    <div class="d-flex align-content-center flex-wrap gap-3">
                        <a href="{{ route('complaints.create') }}" class="btn btn-primary">{{ __("Add") }}+</a>
                    </div>
                @endif

            </div>

            <div class="app-academy">
                <div class="card p-0 mb-4">
                    <form action="{{ route('complaints.index') }}" method="GET">
                        <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
                            <div class="app-academy-md-25 card-body py-0">
                                <img src="/img/bulb-light.png" class="img-fluid app-academy-img-height scaleX-n1-rtl" alt="Bulb in hand" data-app-light-img="bulb-light.png" data-app-dark-img="bulb-dark.png" height="90" />
                            </div>
                            <div class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center">
                                <h3 class="card-title mb-4 lh-sm px-md-5 text-center">
                                    Search complaints in your city
                                    <span class="text-primary fw-medium text-nowrap">{{ __("All complaints in one place") }}</span>.
                                </h3>
                                <div class="d-flex align-items-center justify-content-between app-academy-md-80">
                                    <input type="search" name="search" value="{{ isset($_GET['search']) ? $_GET['search'] : '' }}" placeholder="Find complaint" class="form-control me-2" />
                                    <button type="submit" class="btn btn-primary btn-icon"><i class="bx bx-search"></i></button>
                                </div>
                            </div>
                            <div class="app-academy-md-25 d-flex align-items-end justify-content-end">
                                <img src="/img/pencil-rocket.png" alt="pencil rocket" height="188" class="scaleX-n1-rtl" />
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card mb-4">
                    <div class="card-header d-flex flex-wrap justify-content-between gap-3">
                        <div class="card-title mb-0 me-1">
                            <h5 class="mb-1">{{ __("Complaint") }}</h5>
                            <p class="text-muted mb-0">All {{ $complaints->total() }} complaint</p>
                        </div>
                        <div class="d-flex justify-content-md-end align-items-center gap-3 flex-wrap">
                            <select id="select2_course_select" class="select2 form-select" data-placeholder="{{ __("All categories") }}">
                                <option value="">{{ __("All categories") }}</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                            <label class="switch">
                                <input type="checkbox" class="switch-input">
                                <span class="switch-toggle-slider">
                                    <span class="switch-on"></span>
                                    <span class="switch-off"></span>
                                  </span>
                                <span class="switch-label text-nowrap mb-0">{{ __("Hide completed") }}</span>
                            </label>
                        </div>
                    </div>
                    <div class="card-body">
                        @if($complaints->count())
                            <div class="row gy-4 mb-4">

                                @foreach($complaints as $complaint)
                                    @include('complaints._complaint')
                                @endforeach

                            </div>
                            {!! $complaints->links() !!}
                        @else
                            <div class="row">
                                <div class="col-sm-12 text-center" style="margin-top: 30px">
                                    {{ __("There are no complaints yet for your search criteria") }} <br />
                                    <a href="{{ auth()->check() ? route('complaints.create') : route('login') }}" class="btn btn-primary">{{ __("Add") }}+</a>
                                </div>
                            </div>
                        @endif
                    </div>

                </div>

            </div>

        </div>
        <!-- / Content -->

    </div>


@endsection

<link rel="stylesheet" href="/css/app-academy.css">

