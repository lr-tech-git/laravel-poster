@extends('layouts.app-auth')

@section('content')


    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">{{ __("Home") }} /</span> {{ __("My complaints") }}
        </h4>

        @include("profile._header", ['page' => 'complaint', 'user' => $user])

        <!-- User Profile Complaints -->
        @if($complaints->count())
            <div class="row">
                @foreach($complaints as $complaint)
                    @include('complaints._complaint')
                @endforeach
            </div>

            <div class="row">
                {{ $complaints->links() }}
            </div>
        @else
            <div class="row">
                <div class="col-sm-12 text-center" style="padding-top: 30px">
                    {{ __("You have no complaint yet") }} <br />
                    <a href="{{ route('complaints.create') }}" class="btn btn-primary">{{ __("Add") }}+</a>
                </div>
            </div>
        @endif

        <!--/ User Profile Complaints -->

    </div>

@endsection
