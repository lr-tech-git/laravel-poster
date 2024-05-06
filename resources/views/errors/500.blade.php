@extends('layouts.app')

<style>
    .misc-wrapper{display:flex;flex-direction:column;justify-content:center;align-items:center;min-height:calc(100vh - 1.625rem*2);text-align:center}
</style>
@section('content')
    <div class="container-xxl container-p-y">
        <div class="misc-wrapper">
            <h2 class="mb-2 mx-2">{{ __("On maintenance!") }}</h2>
            <p class="mb-4 mx-2">{{ __("Sorry for the inconvenience, but we are currently performing maintenance") }}</p>
            <a href="/" class="btn btn-primary">{{ __("Try again") }}</a>
            <div class="mt-3">
                <img src="/img/girl-doing-yoga-light.png" alt="page-misc-error-light" width="500" class="img-fluid" data-app-dark-img="page-misc-error-dark.png" data-app-light-img="page-misc-error-light.png">
            </div>
        </div>
    </div>
@endsection
