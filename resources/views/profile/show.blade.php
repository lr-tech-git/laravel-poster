@extends('layouts.app-auth')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">{{ __("Home") }} /</span> {{ __("Profile") }}
        </h4>

        @include("profile._header", ['page' => 'show', 'user' => $user])

        <!-- User Profile Content -->
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-5">
                <!-- About User -->
                <div class="card mb-4">
                    <div class="card-body">
                        <ul class="list-unstyled mb-4 mt-3">
                            <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-medium mx-2">{{ __("Name") }}:</span> <span>{{ $user->getFullName() }}</span></li>
                            <li class="d-flex align-items-center mb-3"><i class="bx bx-check"></i><span class="fw-medium mx-2">{{ __("Status") }}:</span> <span>{{ __("Active") }}</span></li>
                            <li class="d-flex align-items-center mb-3"><i class="bx bx-flag"></i><span class="fw-medium mx-2">{{ __("Address") }}:</span> <span>{{ $user->getAddress() }}</span></li>
                        </ul>
                        <small class="text-muted text-uppercase">{{ __("Contacts") }}</small>
                        <ul class="list-unstyled mb-4 mt-3">
                            <li class="d-flex align-items-center mb-3"><i class="bx bx-phone"></i><span class="fw-medium mx-2">{{ __("Phone") }}:</span> <span>{{ $user->getPhoneNumber() }}</span></li>
                            <li class="d-flex align-items-center mb-3"><i class="bx bx-envelope"></i><span class="fw-medium mx-2">{{ __("Email") }}:</span> <span>{{ $user->email }}</span></li>
                        </ul>
                    </div>
                </div>
                <!--/ About User -->
            </div>
            <div class="col-xl-8 col-lg-7 col-md-7">
                <!-- Activity Timeline -->
                <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0"><i class='bx bx-list-ul me-2'></i>{{ __("Activities") }}</h5>
                    </div>
                    <div class="card-body">
                        <ul class="timeline ms-2">
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-warning"></span></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0">{{ __("Voice added") }}</h6>
                                        <small class="text-muted">{{ __("Today") }}</small>
                                    </div>
                                    <p class="mb-0">{{ __('Added voice to "Test Complaint 2" complaint') }}</p>
                                </div>
                            </li>

                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-info"></span></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0">{{ __("New comment") }}</h6>
                                        <small class="text-muted">{{ __("2 days ago") }}</small>
                                    </div>
                                    <p class="mb-0">{{ __('Added new comment to "Test Complaint 2" complaint') }}</p>
                                </div>
                            </li>

                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-info"></span></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0">{{ __('New comment') }}</h6>
                                        <small class="text-muted">{{ __('3 days ago') }}</small>
                                    </div>
                                    <p class="mb-0">{{ __('Added new comment to "Test Complaint 5" complaint') }}</p>
                                </div>
                            </li>

                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-success"></span></span>
                                <div class="timeline-event pb-0">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0">{{ __('Updating profile data') }}</h6>
                                        <small class="text-muted">{{ __('10 dats ago') }}</small>
                                    </div>
                                    <p class="mb-0">{{ __('Updated profile: Name, Address') }}</p>
                                </div>
                            </li>
                            <li class="timeline-end-indicator">
                                <i class="bx bx-check-circle"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/ Activity Timeline -->

            </div>
        </div>
        <!--/ User Profile Content -->

    </div>

@endsection
