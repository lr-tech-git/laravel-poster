<!-- Header -->
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="user-profile-header-banner">
                <img src="{{ $user->getBannerSrc() }}" alt="Banner image" class="rounded-top">
            </div>
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                    <img src="{{ $user->getImgSrc() }}" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" style="background-color: white">
                </div>
                <div class="flex-grow-1 mt-3 mt-sm-5">
                    <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                        <div class="user-profile-info">
                            <h4>{{ $user->getFullName() }}</h4>
                            <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                <li class="list-inline-item fw-medium">
                                    <i class='bx bx-map'></i> {{ $user->getFullName() }}
                                </li>
                                <li class="list-inline-item fw-medium">
                                    <i class='bx bx-calendar-alt'></i> {{ __("Joined") }} <b>{{ $user->getJoinedDate() }}</b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Header -->

<!-- Navbar pills -->
<div class="row">
    <div class="col-md-12">
        @if(auth()->check() && ($user->id == auth()->id()))
            @if($page == 'complaint')
                <a href="{{ route('complaints.create') }}" class="btn btn-primary float-end">Add+</a>
            @elseif($page == 'show')
                <a href="{{ route('settings.profile') }}" class="btn btn-primary float-end">Edit</a>
            @endif
        @endif

        <ul class="nav nav-pills flex-column flex-sm-row mb-4">
            <li class="nav-item"><a class="nav-link {{ $page == 'show' ? 'active' : ''}}" href="{{ route('profile.show', ['id' => $user->id]) }}"><i class='bx bx-user me-1'></i> {{ __("Profile") }}</a></li>
            <li class="nav-item"><a class="nav-link {{ $page == 'complaint' ? 'active' : ''}}" href="{{ route('profile.complaints', ['id' => $user->id]) }}"><i class='bx bx-grid-alt me-1'></i> {{ __("Complaints") }}</a></li>
        </ul>
    </div>
</div>
<!--/ Navbar pills -->
